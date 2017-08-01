<?php
//============================================================================//
//==    Plugin pour GLPI - D�velloppeur: Viduc (Fleury Tristan) - �2013     ==//
//==            http://viduc.sugarbox.fr - viduc@sugarbox.fr                ==//
//============================================================================//

/**
 * Gestion du formulaire de configuration plugin monplugin
 * Re�oit les informations depuis un formulaire de configuration
 * Renvoie sur la page de l'item trait�
 */

// D�finition de la variable GLPI_ROOT obligatoire pour l'instanciation des class
define('GLPI_ROOT', getAbsolutePath());
// R�cup�ration du fichier includes de GLPI, permet l'acc�s au c�ur
include (GLPI_ROOT."inc/includes.php");

// D�finition du chemin d'acc�s � Smarty
$cheminSmarty = getAbsolutePath()."plugins/audit/Smarty";
 
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

//Instanciation de la class config
$config = new PluginAuditConfig();

//Envoie des variables � Smarty
$smarty->assign('configuration', $config->getConfiguration());
$smarty->assign('httpPath', getHttpPath());
$smarty->assign('absolutePath',  getAbsolutePath());

//Affichage de l'ent�te GLPI (fonction native GLPI)
HTML::header('Configuration Plugin Audit');
//Affichage du plugin
$smarty->display('config.tpl');
//Affichage du pied de page GLPI (fonction native GLPI)
HTML::footer();  

//========================================================================//
/**
 * R�cup�re le chemin absolu de l'instance GLPI
 * @return String : le chemin absolu (racine principale)
 */
function getAbsolutePath()
    {return str_replace("plugins/audit/front/config.form.php", "", $_SERVER['SCRIPT_FILENAME']);}

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
?>