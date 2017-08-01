<?php
/*
 * @version $Id: config.class.php 162 2013-07-31 06:36:19Z yllen $
 -------------------------------------------------------------------------
 Audit plugin for GLPI
 Copyright (C) 2003-2011 by the Audit Development Team.

 https://forge.indepnet.net/projects/Audit
 -------------------------------------------------------------------------

 LICENSE

 This file is part of Audit.

 Audit is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Audit is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Audit. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */


class PluginAuditConfig extends CommonDBTM {

       /**
     * Récupère les informations de configuration enregistrées
     * Retourne un tableau avec ID + valeur
     * @global type $DB
     * @return string
     */
    function getConfiguration()
        {
        global $DB;
        
        $query = "SELECT * FROM glpi_plugin_audit_config WHERE vie='1'";
        if ($result = $DB->query($query))
            {
            if ($DB->numrows($result) > 0)
                {
                $i = 0;
                while ($row = $DB->fetch_assoc($result)) 
                    {
                    if (!empty($row['id'])){$config['id'] = $row['id'];}
                    else{$config['id'] = "";}
                    if (!empty($row['statut'])){$config['statut'] = $row['statut'];}
                    else{$config['statut'] = "";}
                    $retour[$i] = $config;
                    $i++;
                    }
                }  
            }
        return $retour;
        }
		
	    /**
     * Enregistre ou modifie une information de configuration
     * @global type $DB
     * @param type $id
     * @param type $valeur
     */
    function setConfiguration($id=null,$valeur)
        {
        global $DB;
        
        
        if($id != null)
            {
            if($valeur != "delStatut")
                {$query = "UPDATE glpi_plugin_audit_config SET statut='$valeur' WHERE id='$id'";}
            else //suppression du statut (on passe la vie à 0)
                {$query = "UPDATE glpi_plugin_audit_config SET vie='0' WHERE id='$id'";}
            $DB->query($query) or die($DB->error());
            }
        else
            {
            $query = "INSERT INTO glpi_plugin_audit_config (statut,vie) VALUES ('$valeur','1')";
            $DB->query($query) or die($DB->error());
            }
        }	
}

?>