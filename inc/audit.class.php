<?php
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: Viduc (Fleury Tristan) - ©2013     ==//
//==            http://viduc.sugarbox.fr - viduc@sugarbox.fr                ==//
//============================================================================//

/**
 * Class générale du plugin
 */
class PluginAuditAudit extends CommonDBTM
    {
    /**
     * Récupère le nom de l'onglet si l'utilisateur est autorisé
     * @param CommonGLPI $item
     * @param type $withtemplate
     * @return boolean|string
     */
    function getTabNameForItem(CommonGLPI $item, $withtemplate=0) 
        {
        $profile = new PluginAuditProfile();
        if ($profile->estAutorise())
            {if ($item->getType() == 'Computer'){return "Audit";}}
        return '';
        }

    /**
     * Gère ce qui doit être affiché en accédant à l'onglet
     * @param CommonGLPI $item
     * @param type $tabnum
     * @param type $withtemplate
     * @return boolean
     */        
    static function displayTabContentForItem(CommonGLPI $item, $tabnum=1, $withtemplate=0) 
        {
        if ($item->getType() == 'Computer') 
            {
            $profile = new PluginAuditProfile();
            if ($profile->estAutorise())
                {
                $monplugin = new self();
                $ID = $item->getField('id');
                $Name = $item->getField('name');
				
                // j'affiche le formulaire
                $monplugin->showForm($ID, $Name,$age);
                }
            }
        return true;
        }   
        
   /**
     * Fonction qui affiche le formulaire du plugin
     * @param type $id
     * @param type $options
     * @return boolean
     */
    function showForm($id)     
        {
        global $DB;
        $cheminSmarty = $this->getAbsolutePath()."plugins/audit/Smarty";

        // définition de l'emplacement de la bibliothèque
        define('SMARTY_DIR', $cheminSmarty."/libs/");
        
        // instanciation de la class Smarty
        require_once(SMARTY_DIR . 'Smarty.class.php');
        $smarty = new Smarty();
        
        // définition des dossiers Smarty
        $smarty->template_dir = $cheminSmarty."/templates/";
        $smarty->compile_dir = $cheminSmarty."/templates_c/";
        $smarty->config_dir = $cheminSmarty."/configs/";
        $smarty->cache_dir = $cheminSmarty."/cache/";
 
        // vérification si machine déjà enregistrée
        $query = "SELECT t2.statut FROM glpi_plugin_audit_statut as t1,
            glpi_plugin_audit_config as t2 WHERE t1.id_machine = '$id' AND t1.vie = '1'
            AND t1.id_config = t2.id";

        if ($result = $DB->query($query))
            {
            if ($DB->numrows($result) > 0) // Si la machine est enregistrée
                {
                $row = $DB->fetch_assoc($result);
                if (!empty($row['statut'])) {$statut = $row['statut'];} 
                }
            else // sinon on lui attribue le statut 1
                {
                $DB->query("INSERT INTO glpi_plugin_audit_statut (id_machine,id_config) VALUES ('$id','1')") or die($DB->error());
                $query = "SELECT statut FROM glpi_plugin_audit_config WHERE id = '1'";
                if ($result = $DB->query($query))
                    {
                    if ($DB->numrows($result) > 0)
                        {
                        $row = $DB->fetch_assoc($result);
                        if (!empty($row['statut'])) {$statut = $row['statut'];} 
                        }
                    }
                }
            }
        $smarty->assign('statut',$statut);    
        // Récupération de la liste des statuts
        $statutListe = null;    
        $query = "SELECT statut FROM glpi_plugin_audit_config WHERE vie='1'"; 
        if ($result = $DB->query($query))
            {
            if ($DB->numrows($result) > 0) // Si il y a des résultats
                {
                while ($row = $DB->fetch_assoc($result)) 
                    {if (!empty($row['statut'])) {$statutListe[] = $row['statut'];}}
                }
            }
        $smarty->assign('statutListe',$statutListe);  
        $smarty->assign('id',$id);  
        $smarty->assign('httpPath',$this->getHttpPath());
        $smarty->display('audit.tpl');
        }        
    
    /**
     * Récupère le chemin absolu de l'instance GLPI
     * @return String : le chemin absolu (racine principale)
     */
    function getAbsolutePath()
        {return str_replace("ajax/common.tabs.php", "", $_SERVER['SCRIPT_FILENAME']);}

    /**
     * Récupère le chemin absolu de l'instance GLPI pour le formulaire
     * @return String : le chemin absolu (racine principale)
     */
    function getAbsolutePathForm()
        {return str_replace("front/audit.form.php", "", $_SERVER['SCRIPT_FILENAME']);}
        
    /**
     * Récupère le chemin http absolu de l'application GLPI
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
    
    /**
     * Modifie le statut d'une machine
     * @param type $arrayItem
     */
    function modifierMachine($statut,$id)
        {
        global $DB;

        //Récupération de l'id statut
        $query = "SELECT id FROM glpi_plugin_audit_config WHERE statut = '$statut'";
        $idStatut = null;
        if ($result = $DB->query($query))
            {
            if ($DB->numrows($result) > 0) 
                {
                $row = $DB->fetch_assoc($result);
                if (!empty($row['id'])){$idStatut = $row['id'];}
                }
            }
           
        // Vérification enregistrement machine
        $query = "SELECT id FROM glpi_plugin_audit_statut WHERE id_machine = '$id'";
        if ($result = $DB->query($query))
            {
            if ($DB->numrows($result) > 0) 
                {
                $row = $DB->fetch_assoc($result);
                if (!empty($row['id'])) 
                    {
                    // Mise à jour
                    $query = "UPDATE glpi_plugin_audit_statut SET id_config='$idStatut' WHERE id='".$id."'";
                    $DB->query($query);
                    }
                }
            else //insertion
                {$DB->query("INSERT INTO glpi_plugin_audit_statut (id_machine,id_config) VALUES ('$id','$idStatut')") or die($DB->error());}
            }
        } 
    }
?>