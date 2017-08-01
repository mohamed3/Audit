<?php
/*
 * @version $Id: hook.php 200 2015-02-19 10:11:31Z tsmr $
 -------------------------------------------------------------------------
 Addressing plugin for GLPI
 Copyright (C) 2003-2011 by the addressing Development Team.

 https://forge.indepnet.net/projects/addressing
 -------------------------------------------------------------------------

 LICENSE

 This file is part of addressing.

 Addressing is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Addressing is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Addressing. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */
 
 
 /**
 * Fonction d'installation du plugin
 * @return boolean
 */
function plugin_audit_install() 
    {
    global $DB;
	
	    // Création de la table uniquement lors de la première installation
    if (!TableExists("glpi_plugin_audit_profiles")) 
        {

        // requête de création de la table    
        $query = "CREATE TABLE `glpi_plugin_audit_profiles` (
                    `id` int(11) NOT NULL default '0' COMMENT 'RELATION to glpi_profiles (id)',
                    `right` char(1) collate utf8_unicode_ci default NULL,
                    PRIMARY KEY  (`id`)
                  ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

        $DB->query($query) or die($DB->error());

        //création du premier accès nécessaire lors de l'installation du plugin
        $id = $_SESSION['glpiactiveprofile']['id'];
        $query = "INSERT INTO glpi_plugin_audit_profiles VALUES ('$id','w')";

        $DB->query($query) or die($DB->error());
        }
		
	    // Création de la table uniquement lors de la première installation
    if (!TableExists("glpi_plugin_audit_config")) 
        {
        // Création de la table config
        $query = "CREATE TABLE `glpi_plugin_audit_config` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `statut` char(32) NOT NULL default '',
        `vie` char(1) NOT NULL default '1'
        )ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        $DB->query($query) or die($DB->error());
        }	
		
	 // Création de la table uniquement lors de la première installation
    if (!TableExists("glpi_plugin_audit_statut")) 
        {
        // Création de la table config
        $query = "CREATE TABLE `glpi_plugin_audit_statut` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `id_machine` int(11) NOT NULL,
        `id_config` int(11) NOT NULL,
        `vie` char(1) NOT NULL default '1'
        )ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        $DB->query($query) or die($DB->error());
        }	
	
	
	
    
    return true ;
    }
	
/**
 * Fonction de désinstallation du plugin
 * @return boolean
 */
function plugin_audit_uninstall() 
    {
    global $DB;

    $tables = array("glpi_plugin_audit_profiles", "glpi_plugin_audit_config", "glpi_plugin_audit_statut");

    foreach($tables as $table) 
        {$DB->query("DROP TABLE IF EXISTS `$table`;");}
    return true;
    }	
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/*
function plugin_audit_install() {
   global $DB;

   include_once (GLPI_ROOT."/plugins/audit/inc/profile.class.php");
   
   $update = false;
   if (!TableExists("glpi_plugin_audit_display")
       &&!TableExists("glpi_plugin_audit")
       && !TableExists("glpi_plugin_audit_configs")) {

      $DB->runFile(GLPI_ROOT ."/plugins/audit/sql/empty-2.0.0.sql");

   } else {
      
      if (!TableExists("glpi_plugin_audit_profiles")
          && TableExists("glpi_plugin_audit_display")
          && !FieldExists("glpi_plugin_audit_display","ipconf1")) {//1.4
         $update = true;
         $DB->runFile(GLPI_ROOT ."/plugins/audit/sql/update-1.4.sql");
      }

      if (!TableExists("glpi_plugin_audit")
          && TableExists("glpi_plugin_audit_display")
          && FieldExists("glpi_plugin_audit_display","ipconf1")) {
         $update = true;
         $DB->runFile(GLPI_ROOT ."/plugins/audit/sql/update-1.5.sql");

      }

      if (TableExists("glpi_plugin_audit_display")
          && !FieldExists("glpi_plugin_audit","ipdeb")) {
         $update = true;
         $DB->runFile(GLPI_ROOT ."/plugins/audit/sql/update-1.6.sql");

      }

      if (TableExists("glpi_plugin_audit_profiles")
          && FieldExists("glpi_plugin_audit_profiles","interface")) {
         $update = true;
         $DB->runFile(GLPI_ROOT ."/plugins/audit/sql/update-1.7.0.sql");

      }

      if (!TableExists("glpi_plugin_audit_configs")) {
         $DB->runFile(GLPI_ROOT ."/plugins/audit/sql/update-1.8.0.sql");
         $update = true;
      }

      if (TableExists("glpi_plugin_audit_profiles")
          && !FieldExists("glpi_plugin_audit_profiles","use_ping_in_equipment")) {
         $DB->runFile(GLPI_ROOT ."/plugins/audit/sql/update-1.9.0.sql");
         $update = true;
      }

   }

   if ($update) {
      $query_  = "SELECT *
                  FROM `glpi_plugin_audit_profiles` ";
      $result_ = $DB->query($query_);

      if ($DB->numrows($result_)>0) {
         while ($data=$DB->fetch_array($result_)) {
            $query = "UPDATE `glpi_plugin_audit_profiles`
                      SET `profiles_id` = '".$data["id"]."'
                      WHERE `id` = '".$data["id"]."'";
            $result=$DB->query($query);
         }
      }

      if (FieldExists("glpi_plugin_audit_profiles", "name")) {
         $query  = "ALTER TABLE `glpi_plugin_audit_profiles`
                    DROP `name` ";
         $result = $DB->query($query);
      }

      Plugin::migrateItemType(array(5000 => 'PluginAuditAudit',
                                    5001 => 'PluginAuditReport'),
                              array("glpi_bookmarks", "glpi_bookmarks_users",
                                    "glpi_displaypreferences", "glpi_documents_items",
                                    "glpi_infocoms", "glpi_logs", "glpi_items_tickets"));

   }
   
   //0.85 : new profile system
   PluginAuditProfile::migrateProfiles();
   //Add all rights for current user profile
   PluginAuditProfile::createFirstAccess($_SESSION['glpiactiveprofile']['id']);
   //Drop old profile table : not used anymore
   $migration = new Migration("2.2.0");
   $migration->dropTable('glpi_plugin_audit_profiles');

   return true;
}


function plugin_audit_uninstall() {
   global $DB;
   
   include_once (GLPI_ROOT."/plugins/audit/inc/profile.class.php");
   include_once (GLPI_ROOT."/plugins/audit/inc/menu.class.php");
   
   $migration = new Migration("2.2.0");
   $tables = array("glpi_plugin_audit_audits",
                   "glpi_plugin_audit_configs");

   foreach($tables as $table) {
      $migration->dropTable($table);
   }
   
   $itemtypes = array('DisplayPreference', 'Bookmark');
   foreach ($itemtypes as $itemtype) {
      $item = new $itemtype;
      $item->deleteByCriteria(array('itemtype' => 'PluginAuditAudit'));
   }

   //Delete rights associated with the plugin
   $profileRight = new ProfileRight();

   foreach (PluginAuditProfile::getAllRights() as $right) {
      $profileRight->deleteByCriteria(array('name' => $right['field']));
   }
   
   //Remove rigth from $_SESSION['glpiactiveprofile'] if exists
   PluginAuditProfile::removeRightsFromSession();
   
   PluginAuditMenu::removeRightsFromSession();

   return true;
}


// Define database relations
function plugin_audit_getDatabaseRelations() {

   $plugin = new Plugin();

   if ($plugin->isActivated("audit")) {
      return array("glpi_networks" => array("glpi_plugin_audit_audits" => "networks_id"),
                   "glpi_entities" => array("glpi_plugin_audit_audits" => "entities_id"));
   }
   return array ();
}
*/

////// SPECIFIC MODIF MASSIVE FUNCTIONS ///////

/*
function plugin_addressing_MassiveActions($type) {

   switch ($type) {
      case 'Profile' :
         return array("plugin_addressing_allow" => PluginAddressingAddressing::getTypeName(2) . " - " .
                                                   __('Generate reports', 'addressing'));
   }
   return array();
}


function plugin_addressing_MassiveActionsDisplay($options=array()) {

   switch ($options['itemtype']) {
      case 'Profile' :
         switch ($options['action']) {
            case "plugin_addressing_allow" :
               Profile::dropdownNoneReadWrite('use','');
               echo "&nbsp;<input type='submit' name='massiveaction' class='submit' value=\"".
                            _sx('button','Post')."\" >";
               break;
         }
         break;
   }
   return "";
}


function plugin_addressing_MassiveActionsProcess($data) {

   $res = array('ok' => 0,
            'ko' => 0,
            'noright' => 0);

   switch ($data['action']) {
      case 'plugin_addressing_allow' :
         if ($data['itemtype'] == 'Profile') {
            $profglpi = new Profile();
            $prof     = new PluginAddressingProfile();
            foreach ($data["item"] as $key => $val) {
               if ($profglpi->getFromDB($key)
                     && $profglpi->fields['interface']!='helpdesk') {
                  if ($prof->getFromDBByProfile($key)) {
                     if ($prof->update(array('id'          => $prof->fields['id'],
                                         'profiles_id' => $key,
                                         'addressing'  => $data['use']))) {
                        $res['ok']++;
                     } else {
                        $res['ko']++;
                     }
                  } else {
                     if ($prof->add(array('id'             => $prof->fields['id'],
                                      'profiles_id'    => $key,
                                      'addressing'     => $data['use']))) {
                        $res['ok']++;
                     } else {
                        $res['ko']++;
                     }
                  }
               } else {
                  $res['ko']++;
               }
            }
         }
         break;
   }
   return $res;
}
*/
/*
// Do special actions for dynamic report
function plugin_addressing_dynamicReport($params) {

   $PluginAuditAudit = new PluginAuditAudit();
   $PluginAuditReport     = new PluginAuditReport();

   if ($params["item_type"]=='PluginAuditReport'
       && isset($params["id"])
       && isset($params["display_type"])
       && $PluginAuditAudit->getFromDB($params["id"])) {

      $result = $PluginAuditAudit->compute($params["start"]);
      $PluginAuditReport->displayReport($result, $PluginAuditAudit);

      return true;
   }

   // Return false if no specific display is done, then use standard display
   return false;
}
*/

?>