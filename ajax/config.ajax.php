<?php
//============================================================================//
//==    Plugin pour GLPI - Dévelloppeur: Viduc (Fleury Tristan) - ©2013     ==//
//==            http://viduc.sugarbox.fr - viduc@sugarbox.fr                ==//
//============================================================================//

/**
 * Traite toutes les demandes Ajax du plugin
 */
define('GLPI_ROOT', getAbsolutePath());
include (GLPI_ROOT."inc/includes.php");

//Instanciation de la class config
$config = new PluginAuditConfig();

// appelle la méthode correspondant à l'action demandée
if(isset($_POST['action']))
    {  
    if($_POST['action'] == "ajouter")
        {$config->setConfiguration(null,$_POST['valeur']);}
    if($_POST['action'] == "modifier")
        {$config->setConfiguration($_POST['id'],$_POST['valeur']);}
    if($_POST['action'] == "supprimer")
        {$config->setConfiguration($_POST['id'],"delStatut");}
    echo getRetour($config);
    }

//renvoie la partie qui doit être modifiée sur la page
function getRetour($config)
    {
    $retour = "<table class='tab_cadre'>";
    $retour .= "<tr>";
    $retour .= "<td align=\"center\" class=\"green\">";
    $retour .= "<label>Statut existant</label>";
    $retour .= "</td>";
    $retour .= "<td align=\"center\" class=\"green\">";
    $retour .= "<label>Modifier</label> ";
    $retour .= "</td>";
    $retour .= "<td align=\"center\" class=\"green\">";
    $retour .= "<label>Supprimer</label>";
    $retour .= "</td>";
    $retour .= "</tr>";
    foreach ($config->getConfiguration() as $statut)
        {
        $retour .= "<tr>";
        $retour .= "<td><input type=\"text\" size='20' id='".$statut["id"]."' name='statut' value=\"".$statut["statut"]."\" /></td>";
        $retour .= "<td width=\"30px\">";
        $retour .= "<button id=\"btn-modifStatut\" onclick=\"change('modifier',".$statut["id"].",document.getElementById(".$statut["id"].").value)\">";
        $retour .= "<img alt='' title=\"Modifier\" src='".getHttpPath()."pics/actualiser.png'>";
        $retour .= "</button>";
        $retour .= "</td>";
        $retour .= "<td width=\"30px\">";
        $retour .= "<button id=\"btn-suppStatut\" onclick=\"change('supprimer',".$statut["id"].")\">";
        $retour .= "<img alt='' title=\"Modifier\" src='".getHttpPath()."pics/reset.png'>";
        $retour .= "</button>";
        $retour .= "</td>";
        $retour .= "</tr>";
        }
    $retour .= "</table>";
    return $retour;
    }
    
/**
 * Récupère le chemin absolu de l'instance GLPI
 * @return String : le chemin absolu (racine principale)
 */
function getAbsolutePath()
    {return str_replace("plugins/audit/ajax/config.ajax.php", "", $_SERVER['SCRIPT_FILENAME']);}

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
        if($value != "plugins"){$Ref.= $value."/";}
        else{break;}
        }
    return $Ref;
    }

?>