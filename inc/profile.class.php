<?php
//============================================================================//
//==    Plugin pour GLPI - D�velloppeur: Viduc (Fleury Tristan) - �2013     ==//
//==            http://viduc.sugarbox.fr - viduc@sugarbox.fr                ==//
//============================================================================//

/**
 * Class de gestion pour la partie profil
 */
class PluginAuditProfile extends CommonDBTM
    {
    /**
     * R�cup�re le nom de l'onglet si l'utilisateur est autoris�
     * @param CommonGLPI $item
     * @param type $withtemplate
     * @return boolean|string
     */
    function getTabNameForItem(CommonGLPI $item, $withtemplate=0) 
        {
        if (!Session::haveRight("profile","r")) 
            {return false;}
        elseif (Session::haveRight("profile", "w")) 
            {
            //Ici on v�rifie qu'il s'agit bien de la partie Profil de GLPI qui est concern�e
            if ($item->getType() == 'Profile') 
                {
                //Ici on a v�rifi� que l'utilisateur actuel a le droit d'acc�der
                //� cet onglet. 
                return "Audit";
                }
            }
       return '';
       }
    
    /**
     * G�re ce qui doit �tre affich� en acc�dant � l'onglet
     * @param CommonGLPI $item
     * @param type $tabnum
     * @param type $withtemplate
     * @return boolean
     */
    static function displayTabContentForItem(CommonGLPI $item, $tabnum=1, $withtemplate=0) 
        {
        //Ici on v�rifie qu'il s'agit bien de la partie Profil de GLPI qui est concern�e
        if ($item->getType() == 'Profile') 
            {
            $prof = new self();
            //On r�cup�re l'id du profil actuel
            $ID = $item->getField('id');
            // on affiche le formulaire
            $prof->showForm($ID);
            }
        return true;
        }  
    
    /**
     * Fonction qui affiche le formulaire du plugin
     * @param type $id
     * @param type $options
     * @return boolean
     */
    function showForm($id, $options=array()) 
        {
        global $DB;
        //On r�cup�re le chemin qui servira au formulaire
        $target = $this->getFormURL();
        if (isset($options['target'])) 
            {$target = $options['target'];}
        //On v�rifie que l'utilisateur actuel a bien le droit d'acc�der � la gestion des profils
        if (!Session::haveRight("profile","w")) 
            {return false;}

        //On d�finit le chemin d'acc�s � la biblioth�que Smarty   
        $cheminSmarty = $this->getAbsolutePath()."plugins/audit/Smarty";
        
        // d�finition de l'emplacement de la biblioth�que
        define('SMARTY_DIR', $cheminSmarty."/libs/");
        
        // instanciation de la class Smarty
        require_once(SMARTY_DIR . 'Smarty.class.php');
        $smarty = new Smarty();
        
        // d�finition des dossiers Smarty
        $smarty->template_dir = $cheminSmarty."/templates/";
        $smarty->compile_dir = $cheminSmarty."/templates_c/";
        $smarty->config_dir = $cheminSmarty."/configs/";
        $smarty->cache_dir = $cheminSmarty."/cache/";
        
        // v�rification des droits pour le groupe actuel sur le plugin
        $query = "SELECT * FROM glpi_plugin_audit_profiles WHERE id = '$id'";
         if ($result = $DB->query($query))
            {
            // Si le groupe est enregistr� dans la base, on r�cup�re le droit
            if ($DB->numrows($result) > 0)
                {
                $row = $DB->fetch_assoc($result);
                if (!empty($row['right'])){$droit = $row['right'];}   
                $smarty->assign('droit',$droit);   
                }
            // Sinon, on ins�re le groupe dans la base avec un droit � null
            else
                {
                $query = "INSERT INTO `glpi_plugin_audit_profiles`(`id`, `right`) VALUES ('$id','0')";
                $DB->query($query) or die($DB->error());
                $smarty->assign('droit','0');  
                }
            }
        $smarty->assign('endform', HTML::closeForm(false));
        $smarty->assign('id',$id);
        $smarty->assign('target',$target);
        $smarty->display('profile.tpl');
        }
        
    /**
     * Fonction qui modifie les droits dans la base
     * @param type $arrayItem (id, right)
     */
    function majDroit($arrayItem) 
        {
        global $DB;
        //Mise � jour des droits
        $query = "SELECT * FROM glpi_plugin_audit_profiles WHERE id='$arrayItem[0]'";
        if ($result = $DB->query($query))
            {
            if ($DB->numrows($result) > 0)
                {
                $query = "UPDATE `glpi_plugin_audit_profiles` SET `right`='$arrayItem[1]' WHERE `id`=$arrayItem[0]";
                $DB->query($query);
                }
            }
        }
    
    /**
     * V�rifie si l'utilisateur courant est autoris� � utiliser le plugin
     * @global type $DB
     * @return boolean
     */
    function estAutorise() 
        {
        global $DB;
        if (isset($_SESSION["glpiactiveprofile"]["audit"])) 
            {
            if($_SESSION["glpiactiveprofile"]["audit"] == "w" || $_SESSION["glpiactiveprofile"]["audit"] == "r")
                {return true;}
            }
        else
            {
            $ID = $_SESSION["glpiactiveprofile"]["id"];
            $query = "SELECT * FROM glpi_plugin_audit_profiles WHERE id='$ID'";
            if ($result = $DB->query($query))
                {
                $row = $DB->fetch_assoc($result);
                if (!empty($row['right']))
                    {
                    $_SESSION["glpiactiveprofile"]["audit"] = $row['right'];
                    if($_SESSION["glpiactiveprofile"]["audit"] == "w" || $_SESSION["glpiactiveprofile"]["audit"] == "r")
                        {return true;}
                    }
                
                else{$_SESSION["glpiactiveprofile"]["audit"] = "NULL";}
                }
            }
        return false;
        }
        
    /**
     * R�cup�re le chemin absolu de l'instance GLPI
     * @return String : le chemin absolu (racine principale)
     */
    function getAbsolutePath()
        {return str_replace("ajax/common.tabs.php", "", $_SERVER['SCRIPT_FILENAME']);}
    
    /**
     * R�cup�re le chemin http absolu de l'application GLPI
     * @return string : le chemin http absolu de l'application
     */
    function getHttpPath()
        {
        $temp = explode("/",$_SERVER['HTTP_REFERER']);
        $Ref = "";
        foreach ($temp as $value)
            {
            if($value != "front"){$Ref.= $value."/";}
            else{break;}
            }
        return $Ref;
        }        
    }
?>