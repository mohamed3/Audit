<?php
/*
 * @version $Id: setup.php 201 2015-02-26 10:02:58Z tsmr $
 -------------------------------------------------------------------------
 Addressing plugin for GLPI
 Copyright (C) 2003-2011 by the audit Development Team.

 https://forge.indepnet.net/projects/audit
 -------------------------------------------------------------------------

 LICENSE

 This file is part of audit.

 Addressing is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Addressing is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with audit. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */
function plugin_init_audit() {
	
	
	 global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['audit'] = true;
    //$PLUGIN_HOOKS['config_page']['audit'] = 'front/config.form.php';
    Plugin::registerClass('PluginAuditAudit', array('addtabon' => array('Computer')));
	Plugin::registerClass('PluginAuditAudit', array('addtabon' => array('tools')));
	//Plugin::registerClass('PluginAuditProfile', array('addtabon' => array('Profile')));
    Plugin::registerClass('PluginAuditConfig');
    //}
  /* 

   

//   $PLUGIN_HOOKS['change_profile']['addressing'] = array('PluginAddressingProfile', 'changeProfile');
//   $PLUGIN_HOOKS['pre_item_purge']['addressing'] = array('Profile' => array('PluginAddressingProfile',
//                                                                            'purgeProfiles'));
   Plugin::registerClass('PluginAuditProfile',
                         array('addtabon' => array('Profile')));

   */
   
   if (Session::getLoginUserID()) {
      if (Session::haveRight('plugin_audit', READ)) {
         $PLUGIN_HOOKS["menu_toadd"]['audit'] = array('tools'  => 'PluginAuditMenu');
      }

      if (Session::haveRight('plugin_audit', UPDATE)) {
         $PLUGIN_HOOKS['use_massive_action']['audit']   = 1;
      }

      // Config page
      if (Session::haveRight("config", UPDATE)) {
         $PLUGIN_HOOKS['config_page']['audit']             = 'front/config.form.php';
      }

      // Add specific files to add to the header : javascript or css
      $PLUGIN_HOOKS['add_css']['audit']        = "audit.css";
      $PLUGIN_HOOKS['add_javascript']['audit'] = 'audit.js';

      $PLUGIN_HOOKS['post_init']['audit'] = array('PluginAuditPing_Equipment', 'postinit');
	}
}



// Get the name and the version of the plugin - Needed
function plugin_version_audit() {

   return array(
      'name'           => "audit",
      'version'        => '1.0.0',
      'author'         => 'Rezgui Mohamed',
      'license'        => 'GPLv2+',
      'homepage'       => 'https://forge.indepnet.net/projects/audit',
      'minGlpiVersion' => '0.85');// For compatibility / no install in version < 0.80
}


// Optional : check prerequisites before install : may print errors or add to message after redirect
function plugin_audit_check_prerequisites() {
 if (GLPI_VERSION >= 0.80)
        return true;
    echo "A besoin de la version 0.80 au minimum";
    return false; 
   
}


// Uninstall process for plugin : need to return true if succeeded : may display messages or add to message after redirect
function plugin_audit_check_config() {
   return true;
}

?>
