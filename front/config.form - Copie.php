<?php
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: Viduc (Fleury Tristan) - ©2013     ==//
//==            http://viduc.sugarbox.fr - viduc@sugarbox.fr                ==//
//============================================================================//

/**
 * Gestion du formulaire de configuration plugin monplugin
 * Reçoit les informations depuis un formulaire de configuration
 * Renvoie sur la page de l'item traité
 */

// Définition de la variable GLPI_ROOT obligatoire pour l'instanciation des class
define('GLPI_ROOT', getAbsolutePath());
// Récupération du fichier includes de GLPI, permet l'accès au cœur
include (GLPI_ROOT."inc/includes.php");

// Définition du chemin d'accès à Smarty
$cheminSmarty = getAbsolutePath()."plugins/audit/Smarty";
 
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

//Instanciation de la class config
$config = new PluginAuditConfig();

//Envoie des variables à Smarty
$smarty->assign('configuration', $config->getConfiguration());
$smarty->assign('httpPath', getHttpPath());
$smarty->assign('absolutePath',  getAbsolutePath());

//Affichage de l'entête GLPI (fonction native GLPI)
HTML::header('Configuration Plugin Audit');
//Affichage du plugin
$smarty->display('config.tpl');
//Affichage du pied de page GLPI (fonction native GLPI)
HTML::footer();  

//========================================================================//
/**
 * Récupère le chemin absolu de l'instance GLPI
 * @return String : le chemin absolu (racine principale)
 */
function getAbsolutePath()
    {return str_replace("plugins/audit/front/config.form.php", "", $_SERVER['SCRIPT_FILENAME']);}

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
?>