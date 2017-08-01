<?php
/*
 * @version $Id: audit.php 178 2014-04-02 08:05:45Z orthagh $
 -------------------------------------------------------------------------
 audit plugin for GLPI
 Copyright (C) 2003-2011 by the audit Development Team.

 https://forge.indepnet.net/projects/audit
 -------------------------------------------------------------------------

 LICENSE

 This file is part of audit.

 audit is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 audit is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with audit. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 */

include ('../../../inc/includes.php');

Html::header(PluginAuditAudit::getTypeName(2), '', "tools", "pluginauditmenu");

$PluginAuditAudit = new PluginAuditAudit();

if ($PluginAuditAudit->canView() || Session::haveRight("config", UPDATE)) {
   Search::show("PluginAuditAudit");

} else {
   Html::displayRightError();
}

Html::footer();
?>