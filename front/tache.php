<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Tache Planifier -  Admin</title>

<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="/glpi/css/styles.css" media="screen"><!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="/glpi/css/styles_ie.css" media="screen"><![endif]--><link rel="stylesheet" type="text/css" href="/glpi/css/print.css" media="print"><link rel="shortcut icon" type="images/x-icon" href="/glpi/pics/favicon.ico">
<link rel="stylesheet" type="text/css" href="/glpi/lib/jquery/css/smoothness/jquery-ui-1.10.4.custom.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/css/jstree/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/lib/jqueryplugins/rateit/rateit.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/lib/jqueryplugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/lib/jqueryplugins/qtip2/jquery.qtip.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/lib/jqueryplugins/jcrop/jquery.Jcrop.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/lib/jqueryplugins/spectrum-colorpicker/spectrum.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/lib/jqueryplugins/jquery-gantt/css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/css/jquery-glpi.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/plugins/addressing/addressing.css" media="screen">
<link rel="stylesheet" type="text/css" href="/glpi/plugins/audit/audit.css" media="screen">
<script type="text/javascript" src="/glpi/lib/jquery/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/glpi/lib/jquery/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="/glpi/lib/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/backtotop/BackToTop.min.jquery.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/qtip2/jquery.qtip.min.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/jstree/jquery.jstree.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/rateit/jquery.rateit.min.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/jquery-ui-timepicker-addon/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/jcrop/jquery.Jcrop.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/imagepaste/jquery.image_paste.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/spectrum-colorpicker/spectrum.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/jquery-gantt/js/jquery.fn.gantt.min.js"></script>
<script type="text/javascript" src="/glpi/lib/jquery/i18n/jquery.ui.datepicker-fr.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/jquery-ui-timepicker-addon/i18n/jquery-ui-timepicker-fr.js"></script>
<script type="text/javascript" src="/glpi/lib/jqueryplugins/select2/select2_locale_fr.js"></script>
<script type="text/javascript" src="/glpi/script.js"></script>
<script type="text/javascript" src="/glpi/plugins/addressing/addressing.js"></script>
<script type="text/javascript" src="/glpi/plugins/audit/audit.js"></script>
<style>@keyframes nodeInserted{from{outline-color:#fff}to{outline-color:#000}}@-moz-keyframes nodeInserted
			{from{outline-color:#fff}to{outline-color:#000}}
			@-webkit-keyframes nodeInserted{from{outline-color:#fff}to
			{outline-color:#000}}@-ms-keyframes nodeInserted{from{outline-color:#fff}to{outline-color:#000}}@-o-keyframes nodeInserted{from{outline-color:#fff}to{outline-color:#000}}.ace-save-state{animation-duration:10ms;-o-animation-duration:10ms;-ms-animation-duration:10ms;-moz-animation-duration:10ms;-webkit-animation-duration:10ms;animation-delay:0s;-o-animation-delay:0s;-ms-animation-delay:0s;-moz-animation-delay:0s;-webkit-animation-delay:0s;animation-name:nodeInserted;-o-animation-name:nodeInserted;-ms-animation-name:nodeInserted;-moz-animation-name:nodeInserted;-webkit-animation-name:nodeInserted}</style>
<style type="text/css" id="vakata-stylesheet">#vakata-dragged { display:block; margin:0 0 0 0; padding:4px 4px 4px 24px; position:absolute; top:-2000px; line-height:16px; z-index:10000; } #vakata-contextmenu { display:block; visibility:hidden; left:0; top:-200px; position:absolute; margin:0; padding:0; min-width:180px; background:#ebebeb; border:1px solid silver; z-index:10000; *width:180px; } #vakata-contextmenu ul { min-width:180px; *width:180px; } #vakata-contextmenu ul, #vakata-contextmenu li { margin:0; padding:0; list-style-type:none; display:block; } #vakata-contextmenu li { line-height:20px; min-height:20px; position:relative; padding:0px; } #vakata-contextmenu li a { padding:1px 6px; line-height:17px; display:block; text-decoration:none; margin:1px 1px 0 1px; } #vakata-contextmenu li ins { float:left; width:16px; height:16px; text-decoration:none; margin-right:2px; } #vakata-contextmenu li a:hover, #vakata-contextmenu li.vakata-hover > a { background:gray; color:white; } #vakata-contextmenu li ul { display:none; position:absolute; top:-2px; left:100%; background:#ebebeb; border:1px solid gray; } #vakata-contextmenu .right { right:100%; left:auto; } #vakata-contextmenu .bottom { bottom:-1px; top:auto; } #vakata-contextmenu li.vakata-separator { min-height:0; height:1px; line-height:1px; font-size:1px; overflow:hidden; margin:0 2px; background:silver; /* border-top:1px solid #fefefe; */ padding:0; } </style>
<style type="text/css" id="jstree-stylesheet">.jstree ul, .jstree li { display:block; margin:0 0 0 0; padding:0 0 0 0; list-style-type:none; } .jstree li { display:block; min-height:18px; line-height:18px; white-space:nowrap; margin-left:18px; min-width:18px; } .jstree-rtl li { margin-left:0; margin-right:18px; } .jstree > ul > li { margin-left:0px; } .jstree-rtl > ul > li { margin-right:0px; } .jstree ins { display:inline-block; text-decoration:none; width:18px; height:18px; margin:0 0 0 0; padding:0; } .jstree a { display:inline-block; line-height:16px; height:16px; color:black; white-space:nowrap; text-decoration:none; padding:1px 2px; margin:0; } .jstree a:focus { outline: none; } .jstree a > ins { height:16px; width:16px; } .jstree a > .jstree-icon { margin-right:3px; } .jstree-rtl a > .jstree-icon { margin-left:3px; margin-right:0; } li.jstree-open > ul { display:block; } li.jstree-closed > ul { display:none; } #vakata-dragged ins { display:block; text-decoration:none; width:16px; height:16px; margin:0 0 0 0; padding:0; position:absolute; top:4px; left:4px;  -moz-border-radius:4px; border-radius:4px; -webkit-border-radius:4px; } #vakata-dragged .jstree-ok { background:green; } #vakata-dragged .jstree-invalid { background:red; } #jstree-marker { padding:0; margin:0; font-size:12px; overflow:hidden; height:12px; width:8px; position:absolute; top:-30px; z-index:10001; background-repeat:no-repeat; display:none; background-color:transparent; text-shadow:1px 1px 1px white; color:black; line-height:10px; } #jstree-marker-line { padding:0; margin:0; line-height:0%; font-size:1px; overflow:hidden; height:1px; width:100px; position:absolute; top:-30px; z-index:10000; background-repeat:no-repeat; display:none; background-color:#456c43;  cursor:pointer; border:1px solid #eeeeee; border-left:0; -moz-box-shadow: 0px 0px 2px #666; -webkit-box-shadow: 0px 0px 2px #666; box-shadow: 0px 0px 2px #666;  -moz-border-radius:1px; border-radius:1px; -webkit-border-radius:1px; }.jstree .jstree-real-checkbox { display:none; } .jstree-themeroller .ui-icon { overflow:visible; } .jstree-themeroller a { padding:0 2px; } .jstree-themeroller .jstree-no-icon { display:none; }.jstree .jstree-wholerow-real { position:relative; z-index:1; } .jstree .jstree-wholerow-real li { cursor:pointer; } .jstree .jstree-wholerow-real a { border-left-color:transparent !important; border-right-color:transparent !important; } .jstree .jstree-wholerow { position:relative; z-index:0; height:0; } .jstree .jstree-wholerow ul, .jstree .jstree-wholerow li { width:100%; } .jstree .jstree-wholerow, .jstree .jstree-wholerow ul, .jstree .jstree-wholerow li, .jstree .jstree-wholerow a { margin:0 !important; padding:0 !important; } .jstree .jstree-wholerow, .jstree .jstree-wholerow ul, .jstree .jstree-wholerow li { background:transparent !important; }.jstree .jstree-wholerow ins, .jstree .jstree-wholerow span, .jstree .jstree-wholerow input { display:none !important; }.jstree .jstree-wholerow a, .jstree .jstree-wholerow a:hover { text-indent:-9999px; !important; width:100%; padding:0 !important; border-right-width:0px !important; border-left-width:0px !important; } .jstree .jstree-wholerow-span { position:absolute; left:0; margin:0px; padding:0; height:18px; border-width:0; padding:0; z-index:0; }</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
	
	
	
		
		
		
		
		
		<meta name="description" content="Mailbox with some customizations as described in docs" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="ace-master/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="ace-master/assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="ace-master/assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="ace-master/assets/css/ui.jqgrid.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="ace-master/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="ace-master/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="ace-master/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="ace-master/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="ace-master/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="ace-master/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="ace-master/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="ace-master/assets/js/html5shiv.min.js"></script>
		<script src="ace-master/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="header"><div id="c_logo"><a href="/glpi/front/central.php" accesskey="1" title="Accueil"></a></div><div id="c_preference"><ul><li id="deconnexion"><a href="/glpi/front/logout.php" title="Déconnexion">Déconnexion</a> (REZGUI MOHAMED)</li>
<li><a href="http://glpi-project.org/help-central" target="_blank" title="Aide">Aide</a></li><li><a href="/glpi/front/preference.php" title="Mes préférences">Mes préférences</a></li><li><a href="/glpi/front/preference.php" title="Français">Français</a></li></ul><div class="sep"></div></div>
<div id="c_recherche">
<form method="get" action="/glpi/front/search.php">
<div id="boutonRecherche"><input type="image" src="/glpi/pics/search.png" class="submit" title="Envoyer" alt="Envoyer"></div><div id="champRecherche"><input size="15" type="text" name="globalsearch" value="Rechercher" onfocus="this.value='';"></div>
<input type="hidden" name="_glpi_csrf_token" value="42419098c58e430a4ecc6c20df729bf0">
</form>
<div class="sep"></div>
</div><div id="c_menu"><ul id="menu"><li id="menu1" onmouseover="javascript:menuAff('menu1','menu');"><a href="/glpi/front/computer.php" class="itemP">Parc</a><ul class="ssmenu"><li><a href="/glpi/front/computer.php" accesskey="o"><u>O</u>rdinateurs</a></li>
<li><a href="/glpi/front/monitor.php">Moniteurs</a></li>
<li><a href="/glpi/front/software.php" accesskey="s">Logiciel<u>s</u></a></li>
<li><a href="/glpi/front/networkequipment.php">Réseaux</a></li>
<li><a href="/glpi/front/peripheral.php">Périphériques</a></li>
<li><a href="/glpi/front/printer.php">Imprimantes</a></li>
<li><a href="/glpi/front/cartridgeitem.php">Cartouches</a></li>
<li><a href="/glpi/front/consumableitem.php">Consommables</a></li>
<li><a href="/glpi/front/phone.php">Téléphones</a></li>
<li><a href="/glpi/plugins/fusioninventory/front/unmanaged.php">Equipement non-géré</a></li>
<li><a href="/glpi/front/allassets.php">Global</a></li>
</ul></li><li id="menu2" onmouseover="javascript:menuAff('menu2','menu');"><a href="/glpi/front/ticket.php" class="itemP">Assistance</a><ul class="ssmenu"><li><a href="/glpi/front/ticket.php" accesskey="t"><u>T</u>ickets</a></li>
<li><a href="/glpi/front/ticket.form.php">Créer un ticket</a></li>
<li><a href="/glpi/front/problem.php">Problèmes</a></li>
<li><a href="/glpi/front/change.php">Changements</a></li>
<li><a href="/glpi/front/planning.php" accesskey="p"><u>P</u>lanning</a></li>
<li><a href="/glpi/front/stat.php" accesskey="a">St<u>a</u>tistiques</a></li>
<li><a href="/glpi/front/ticketrecurrent.php" accesskey="n">Tickets récurre<u>n</u>ts</a></li>
</ul></li><li id="menu3" onmouseover="javascript:menuAff('menu3','menu');"><a href="/glpi/front/budget.php" class="itemP">Gestion</a><ul class="ssmenu"><li><a href="/glpi/front/budget.php">Budgets</a></li>
<li><a href="/glpi/front/supplier.php">Fournisseurs</a></li>
<li><a href="/glpi/front/contact.php">Contacts</a></li>
<li><a href="/glpi/front/contract.php">Contrats</a></li>
<li><a href="/glpi/front/document.php" accesskey="d"><u>D</u>ocuments</a></li>
</ul></li><li id="menu4" onmouseover="javascript:menuAff('menu4','menu');"><a href="/glpi/front/project.php" class="itemP">Outils</a><ul class="ssmenu"><li><a href="/glpi/front/project.php">Projets</a></li>
<li><a href="/glpi/front/reminder.php">Notes</a></li>
<li><a href="/glpi/front/rssfeed.php">Flux RSS</a></li>
<li><a href="/glpi/front/knowbaseitem.php" accesskey="b"><u>B</u>ase de connaissances</a></li>
<li><a href="/glpi/front/reservationitem.php">Réservations</a></li>
<li><a href="/glpi/front/report.php" accesskey="e">Rapports</a></li>
<li><a href="/glpi/plugins/addressing/front/addressing.php">Adressage IP</a></li>
<li><a href="/glpi/plugins/ocsinventoryng/front/ocsng.php">OCS Inventory NG</a></li>
</ul></li><li id="menu5" onmouseover="javascript:menuAff('menu5','menu');"><a href="/glpi/plugins/fusioninventory/front/menu.php" class="itemP">Plugins</a><ul class="ssmenu"><li><a href="/glpi/plugins/fusioninventory/front/menu.php">FusionInventory</a></li>
</ul></li><li id="menu6" onmouseover="javascript:menuAff('menu6','menu');"><a href="/glpi/front/user.php" class="itemP">Administration</a><ul class="ssmenu"><li><a href="/glpi/front/user.php" accesskey="u"><u>U</u>tilisateurs</a></li>
<li><a href="/glpi/front/group.php" accesskey="g"><u>G</u>roupes</a></li>
<li><a href="/glpi/front/entity.php">E<u>n</u>tités</a></li>
<li><a href="/glpi/front/rule.php">Règles</a></li>
<li><a href="/glpi/front/dictionnary.php">Dictionnaires</a></li>
<li><a href="/glpi/front/profile.php">Profils</a></li>
<li><a href="/glpi/front/queuedmail.php">File d'attente des courriels</a></li>
<li><a href="/glpi/front/backup.php">Maintenance</a></li>
<li><a href="/glpi/front/event.php">Journaux</a></li>
</ul></li><li id="menu7" onmouseover="javascript:menuAff('menu7','menu');"><a href="/glpi/front/dropdown.php" class="itemP">Configuration</a><ul class="ssmenu"><li><a href="/glpi/front/dropdown.php">I<u>n</u>titulés</a></li>
<li><a href="/glpi/front/device.php">Composants</a></li>
<li><a href="/glpi/front/setup.notification.php">Notifications</a></li>
<li><a href="/glpi/front/sla.php">SLAs</a></li>
<li><a href="/glpi/front/config.form.php">Générale</a></li>
<li><a href="/glpi/front/control.php">Contrôles</a></li>
<li><a href="/glpi/front/crontask.php">Actions automatiques</a></li>
<li><a href="/glpi/front/setup.auth.php">Authentification</a></li>
<li><a href="/glpi/front/mailcollector.php">Collecteurs</a></li>
<li><a href="/glpi/front/link.php">Liens externes</a></li>
<li><a href="/glpi/front/plugin.php">Plugins</a></li>
</ul></li></ul><div class="sep"></div></div><div id="c_ssmenu1"><ul><li>&nbsp;</li></ul></div><div id="c_ssmenu2"><ul><li><a href="/glpi/front/central.php" title="Accueil">Accueil</a> &gt;</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li><div id="show_all_menu" class="invisible"><table><tbody><tr><td class="top"><table><tbody><tr><td class="tab_bg_1 b"><a href="/glpi/front/computer.php" title="Parc" class="itemP">Parc</a></td></tr><tr><td><a href="/glpi/front/computer.php">Ordinateurs</a></td></tr>
<tr><td><a href="/glpi/front/monitor.php">Moniteurs</a></td></tr>
<tr><td><a href="/glpi/front/software.php">Logiciels</a></td></tr>
<tr><td><a href="/glpi/front/networkequipment.php">Réseaux</a></td></tr>
<tr><td><a href="/glpi/front/peripheral.php">Périphériques</a></td></tr>
<tr><td><a href="/glpi/front/printer.php">Imprimantes</a></td></tr>
<tr><td><a href="/glpi/front/cartridgeitem.php">Cartouches</a></td></tr>
<tr><td><a href="/glpi/front/consumableitem.php">Consommables</a></td></tr>
<tr><td><a href="/glpi/front/phone.php">Téléphones</a></td></tr>
<tr><td><a href="/glpi/plugins/fusioninventory/front/unmanaged.php">Equipement non-géré</a></td></tr>
<tr><td><a href="/glpi/front/allassets.php">Global</a></td></tr>
<tr><td class="tab_bg_1 b"><a href="/glpi/front/ticket.php" title="Assistance" class="itemP">Assistance</a></td></tr><tr><td><a href="/glpi/front/ticket.php">Tickets</a></td></tr>
<tr><td><a href="/glpi/front/ticket.form.php">Créer un ticket</a></td></tr>
<tr><td><a href="/glpi/front/problem.php">Problèmes</a></td></tr>
<tr><td><a href="/glpi/front/change.php">Changements</a></td></tr>
</tbody></table></td><td class="top"><table><tbody><tr><td><a href="/glpi/front/planning.php">Planning</a></td></tr>
<tr><td><a href="/glpi/front/stat.php">Statistiques</a></td></tr>
<tr><td><a href="/glpi/front/ticketrecurrent.php">Tickets récurrents</a></td></tr>
<tr><td class="tab_bg_1 b"><a href="/glpi/front/budget.php" title="Gestion" class="itemP">Gestion</a></td></tr><tr><td><a href="/glpi/front/budget.php">Budgets</a></td></tr>
<tr><td><a href="/glpi/front/supplier.php">Fournisseurs</a></td></tr>
<tr><td><a href="/glpi/front/contact.php">Contacts</a></td></tr>
<tr><td><a href="/glpi/front/contract.php">Contrats</a></td></tr>
<tr><td><a href="/glpi/front/document.php">Documents</a></td></tr>
<tr><td class="tab_bg_1 b"><a href="/glpi/front/project.php" title="Outils" class="itemP">Outils</a></td></tr><tr><td><a href="/glpi/front/project.php">Projets</a></td></tr>
<tr><td><a href="/glpi/front/reminder.php">Notes</a></td></tr>
<tr><td><a href="/glpi/front/rssfeed.php">Flux RSS</a></td></tr>
<tr><td><a href="/glpi/front/knowbaseitem.php">Base de connaissances</a></td></tr>
<tr><td><a href="/glpi/front/reservationitem.php">Réservations</a></td></tr>
<tr><td><a href="/glpi/front/report.php">Rapports</a></td></tr>
</tbody></table></td><td class="top"><table><tbody><tr><td><a href="/glpi/plugins/addressing/front/addressing.php">Adressage IP</a></td></tr>
<tr><td><a href="/glpi/plugins/ocsinventoryng/front/ocsng.php">OCS Inventory NG</a></td></tr>
<tr><td class="tab_bg_1 b"><a href="/glpi/plugins/fusioninventory/front/menu.php" title="Plugins" class="itemP">Plugins</a></td></tr><tr><td><a href="/glpi/plugins/fusioninventory/front/menu.php">FusionInventory</a></td></tr>
<tr><td class="tab_bg_1 b"><a href="/glpi/front/user.php" title="Administration" class="itemP">Administration</a></td></tr><tr><td><a href="/glpi/front/user.php">Utilisateurs</a></td></tr>
<tr><td><a href="/glpi/front/group.php">Groupes</a></td></tr>
<tr><td><a href="/glpi/front/entity.php">Entités</a></td></tr>
<tr><td><a href="/glpi/front/rule.php">Règles</a></td></tr>
<tr><td><a href="/glpi/front/dictionnary.php">Dictionnaires</a></td></tr>
<tr><td><a href="/glpi/front/profile.php">Profils</a></td></tr>
<tr><td><a href="/glpi/front/queuedmail.php">File d'attente des courriels</a></td></tr>
<tr><td><a href="/glpi/front/backup.php">Maintenance</a></td></tr>
<tr><td><a href="/glpi/front/event.php">Journaux</a></td></tr>
<tr><td class="tab_bg_1 b"><a href="/glpi/front/dropdown.php" title="Configuration" class="itemP">Configuration</a></td></tr><tr><td><a href="/glpi/front/dropdown.php">Intitulés</a></td></tr>
</tbody></table></td><td class="top"><table><tbody><tr><td><a href="/glpi/front/device.php">Composants</a></td></tr>
<tr><td><a href="/glpi/front/setup.notification.php">Notifications</a></td></tr>
<tr><td><a href="/glpi/front/sla.php">SLAs</a></td></tr>
<tr><td><a href="/glpi/front/config.form.php">Générale</a></td></tr>
<tr><td><a href="/glpi/front/control.php">Contrôles</a></td></tr>
<tr><td><a href="/glpi/front/crontask.php">Actions automatiques</a></td></tr>
<tr><td><a href="/glpi/front/setup.auth.php">Authentification</a></td></tr>
<tr><td><a href="/glpi/front/mailcollector.php">Collecteurs</a></td></tr>
<tr><td><a href="/glpi/front/link.php">Liens externes</a></td></tr>
<tr><td><a href="/glpi/front/plugin.php">Plugins</a></td></tr>
</tbody></table></td></tr></tbody></table></div><script type="text/javascript">
//<![CDATA[

$( document ).ready(function() {
$('#show_all_menu').dialog({
         height: 'auto',
         width: 'auto',
         modal: true,
         autoOpen: false
         });
});

//]]>
</script>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li><script type="text/javascript">
            $('#loadbookmark').dialog({
               modal: true,
               autoOpen: false,
               height: 500,
               width: 1050,
               draggable: true,
               resizeable: true,
               open: function(ev, ui){
               $('#Iframeloadbookmark').attr('src','/glpi/front/bookmark.php?action=load&_in_modal=1');},close: function(ev, ui) { window.location.reload() },title: "Charger un marque-page"});
            </script><a href="#" onclick="$('#loadbookmark').dialog('open');"><img src="/glpi/pics/bookmark.png" title="Charger un marque-page" alt="Charger un marque-page"></a></li><li><a href="#" onclick="$('#show_all_menu').dialog('open');"><img alt="" src="/glpi/pics/menu_all.png"></a></li><li><script type="text/javascript">
var entity_window=$('<div />').dialog({

         width:800,

         autoOpen: false,

         height:400,

         modal: true,

         title: "Sélectionnez l\'entité souhaitée",

         open: function (){
            var fields = {"target":"\/glpi\/front\/central.php"};
            $(this).load('/glpi/ajax/entitytree.php', fields);
         }
      });
</script>
<a onclick="entity_window.dialog(&quot;open&quot;);" href="#modal_entity_content" title="Root entity All (Arborescence)" class="entity_select" id="global_entity_select">Root entity All (Arborescence)</a></li></ul></div></div>
		
		
		
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state <!--sidebar-fixed-->" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->

				<div class="nav-wrap-up pos-rel"><div class="nav-wrap" style="max-height: 309px;"><div style="position: relative; top: 0px; transition-property: top; transition-duration: 0.15s;"><ul class="nav nav-list" style="top: 0px;">
					<li class="">
						<a href="config.form.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Tableau de bord </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="scan.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Scan </span>
						</a>

						<b class="arrow"></b>
					</li>


					

					

					<li class="">
						<a href="Siege.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Siege </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="ms.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Usine Msaken </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="mb.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Usine MB </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="transit.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Transit Sousse </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="ks.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Depot Ksar Said </span>
						</a>

						<b class="arrow"></b>
					</li>
 					<li class="active">
						<a href="tache.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Taches Planifier </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="historique.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Historique </span>
						</a>

						<b class="arrow"></b>
					</li>

					

					

					

					
				</ul></div></div><div class="ace-scroll nav-scroll"><div class="scroll-track scroll-active" style="display: block; height: 200px;"><div class="scroll-bar" style="height: 129px; top: 0px;"></div></div><div class="scroll-content" style="max-height: 200px;"><div class="scroll-track scroll-active" style="display: block; height: 309px;"><div class="scroll-bar" style="top: 0px; transition-property: top; transition-duration: 0.1s; height: 239px;"></div></div><div class="scroll-content" style="max-height: 309px;"><div style="height: 400px; width: 8px;"></div></div></div></div></div><!-- /.nav-list -->

				<!--<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse" style="z-index: 1;">
					<i id="sidebar-toggle-icon" class="ace-save-state ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>-->
			</div>
			
			
			
			

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="config.form.php">Acceuil</a>
							</li>

							<li>
								<a href="tache.php">Tache planifier</a>
							</li>
							<!--<li class="active">Inbox</li>-->
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Les Taches Planifiées
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<div class="tabbable">
											<ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
												<!--<li class="li-new-mail pull-right">
													<a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
														<span class="btn btn-purple no-border">
															<i class="ace-icon fa fa-envelope bigger-130"></i>
															<span class="bigger-110">Write Mail</span>
														</span>
													</a>
												</li><!-- /.li-new-mail -->

												<li class="active">
													<a data-toggle="tab" href="#inbox" data-target="inbox">
														<i class="blue ace-icon fa fa-inbox bigger-130"></i>
														<span class="bigger-110">Taches</span>
													</a>
												</li>
												
												

												<!--<li>
													<a data-toggle="tab" href="#sent" data-target="sent">
														<i class="orange ace-icon fa fa-location-arrow bigger-130"></i>
														<span class="bigger-110">Sent</span>
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#draft" data-target="draft">
														<i class="green ace-icon fa fa-pencil bigger-130"></i>
														<span class="bigger-110">Draft</span>
													</a>
												</li>

												<li class="dropdown">
													<a data-toggle="dropdown" class="dropdown-toggle" href="#">
														<i class="pink ace-icon fa fa-tags bigger-130"></i>

														<span class="bigger-110">
															Tags
															<i class="ace-icon fa fa-caret-down"></i>
														</span>
													</a>

													<ul class="dropdown-menu dropdown-light-blue dropdown-125">
														<li>
															<a data-toggle="tab" href="#tag-1">
																<span class="mail-tag badge badge-pink"></span>
																<span class="pink">Tag#1</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-family">
																<span class="mail-tag badge badge-success"></span>
																<span class="green">Family</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-friends">
																<span class="mail-tag badge badge-info"></span>
																<span class="blue">Friends</span>
															</a>
														</li>

														<li>
															<a data-toggle="tab" href="#tag-work">
																<span class="mail-tag badge badge-grey"></span>
																<span class="grey">Work</span>
															</a>
														</li>
													</ul>
												</li><!-- /.dropdown -->
											</ul>

											<div class="tab-content no-border no-padding">
												<div id="inbox" class="tab-pane in active">
													<div class="message-container">
														<div id="id-message-list-navbar" class="message-navbar clearfix">
															<div class="message-bar">
																<div class="message-infobar" id="id-message-infobar">
																	<!--<span class="blue bigger-150">Inbox</span>
																	<span class="grey bigger-110">(2 unread messages)</span>-->
																</div>

																<div class="message-toolbar hide">
																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<span class="bigger-110">
																			<a href="#">Etat</a>
																			</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<!--<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
																				</a>
																			</li>
																		</ul>-->
																	</div>

																	<div class="inline position-relative align-left">
																		<!--<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
																			<span class="bigger-110">Move to</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>-->

																		<!--<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop blue"></i>&nbsp; Family
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop green"></i>&nbsp; Friends
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop grey"></i>&nbsp; Work
																				</a>
																			</li>
																		</ul>-->
																	</div>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
																		<span class="bigger-110">
																		<a href="#">Supprimer</a>
																		</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<label class="inline middle">
																		<input type="checkbox" id="id-toggle-all" class="ace" />
																		<span class="lbl"></span>
																	</label>

																	&nbsp;
																	<div class="inline position-relative">
																		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
																			<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-lighter dropdown-100">
																			<li>
																				<a id="id-select-message-all" href="#">Tous</a>
																			</li>

																			<li>
																				<a id="id-select-message-none" href="#">Non</a>
																			</li>

																			<li class="divider"></li>

																			<!--<li>
																				<a id="id-select-message-unread" href="#">Unread</a>
																			</li>

																			<li>
																				<a id="id-select-message-read" href="#">Read</a>
																			</li>-->
																		</ul>
																	</div>
																</div>

																<!--<div class="messagebar-item-right">
																	<div class="inline position-relative">
																		<a href="#" data-toggle="dropdown" class="dropdown-toggle">
																			Sort &nbsp;
																			<i class="ace-icon fa fa-caret-down bigger-125"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-lighter dropdown-menu-right dropdown-100">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check green"></i>
																					Date
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check invisible"></i>
																					From
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-check invisible"></i>
																					Subject
																				</a>
																			</li>
																		</ul>
																	</div>
																</div>-->

																<div class="nav-search minimized">
																	<form class="form-search">
																		<span class="input-icon">
																			<input type="text" autocomplete="off" class="input-small nav-search-input" placeholder="Search inbox ..." />
																			<i class="ace-icon fa fa-search nav-search-icon"></i>
																		</span>
																	</form>
																</div>
															</div>
														</div>

														<div id="id-message-item-navbar" class="hide message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">
																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<span class="bigger-110">Action</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-reply blue"></i>&nbsp; Reply
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-mail-forward green"></i>&nbsp; Forward
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-folder-open orange"></i>&nbsp; Archive
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye blue"></i>&nbsp; Mark as read
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-eye-slash green"></i>&nbsp; Mark unread
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-flag-o red"></i>&nbsp; Flag
																				</a>
																			</li>

																			<li class="divider"></li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-trash-o red bigger-110"></i>&nbsp; Delete
																				</a>
																			</li>
																		</ul>
																	</div>

																	<div class="inline position-relative align-left">
																		<button type="button" class="btn-white btn-primary btn btn-xs dropdown-toggle" data-toggle="dropdown">
																			<i class="ace-icon fa fa-folder-o bigger-110 blue"></i>
																			<span class="bigger-110">Move to</span>

																			<i class="ace-icon fa fa-caret-down icon-on-right"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-lighter dropdown-caret dropdown-125">
																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop pink2"></i>&nbsp; Tag#1
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop blue"></i>&nbsp; Family
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop green"></i>&nbsp; Friends
																				</a>
																			</li>

																			<li>
																				<a href="#">
																					<i class="ace-icon fa fa-stop grey"></i>&nbsp; Work
																				</a>
																			</li>
																		</ul>
																	</div>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-trash-o bigger-125 orange"></i>
																		<span class="bigger-110">Delete</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="#" class="btn-back-message-list">
																		<i class="ace-icon fa fa-arrow-left blue bigger-110 middle"></i>
																		<b class="bigger-110 middle">Back</b>
																	</a>
																</div>

																<div class="messagebar-item-right">
																	<i class="ace-icon fa fa-clock-o bigger-110 orange"></i>
																	<span class="grey">Today, 7:15 pm</span>
																</div>
															</div>
														</div>

														<div id="id-message-new-navbar" class="hide message-navbar clearfix">
															<div class="message-bar">
																<div class="message-toolbar">
																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-floppy-o bigger-125"></i>
																		<span class="bigger-110">Save Draft</span>
																	</button>

																	<button type="button" class="btn btn-xs btn-white btn-primary">
																		<i class="ace-icon fa fa-times bigger-125 orange2"></i>
																		<span class="bigger-110">Discard</span>
																	</button>
																</div>
															</div>

															<div>
																<div class="messagebar-item-left">
																	<a href="#" class="btn-back-message-list">
																		<i class="ace-icon fa fa-arrow-left bigger-110 middle blue"></i>
																		<b class="middle bigger-110">Back</b>
																	</a>
																</div>

																<div class="messagebar-item-right">
																	<span class="inline btn-send-message">
																		<button type="button" class="btn btn-sm btn-primary no-border btn-white btn-round">
																			<span class="bigger-110">Send</span>

																			<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
																		</button>
																	</span>
																</div>
															</div>
														</div>
														
														<div class="message-list-container">
															<div class="message-list" id="message-list">
																<?php
														$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
														mysql_select_db('glpi855',$con);
														$reponse = mysql_query("SELECT  * FROM  glpi_tache  order by (date) desc ") or die ('erreur SQL '.$query.'<br>'.mysql_error());
		
						
														while($donnees = mysql_fetch_array($reponse)){
																if ( $donnees['etat']=="desactiver"){
															?>
																<div class="message-item message-unread">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>

																	<span class="sender" title="John Doe">
																		<?php echo $donnees['nom'];?>
																		<span class="light-grey"></span>
																	</span>
																	<span class="attachment" ><?php echo $donnees['date'];?></span>

																	<!--
																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>-->

																	<span class="summary">
																		<span class="badge badge-pink mail-tag"></span>
																		<span class="text">
																			<?php echo $donnees['adresse'];?>
																			<?php echo $donnees['site'];?>
																		</span>
																	</span>
																</div>
																<?php
																}
																else {
																?>
																<div class="message-item">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl"></span>
																	</label>

																	<i class="message-star ace-icon fa fa-star-o light-grey"></i>
																	<span class="sender" title="Philip Markov"><?php echo $donnees['nom']?> </span>
																	<span class="attachment"><?php echo $donnees['date'];?></span>

																	<!--
																	<span class="attachment">
																		<i class="ace-icon fa fa-paperclip"></i>
																	</span>-->

																	<span class="summary">
																		<span class="badge badge-success mail-tag"></span>
																		<span class="text">
																			<?php echo $donnees['adresse'] ;?>
																			<?php echo $donnees['site'];?>
																		</span>
																	</span>
																</div>

																<?php 
																 }
																}		
																?>


							

																

				

																

																

																

																
															</div>
														</div>

														<div class="message-footer clearfix">
															<div class="pull-left"> 
															<?php $Num= mysql_query("SELECT COUNT( * )FROM glpi_tache");
																	$Num1 = mysql_fetch_array($Num);
																	echo "<h4> Total: ".$Num1['COUNT( * )']."</h4>"?>
															 </div>

															<div class="pull-right">
																<!--<div class="inline middle"> page 1 of 16 </div>-->

																&nbsp; &nbsp;
																<ul class="pagination middle">
																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-step-backward middle"></i>
																		</span>
																	</li>

																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-caret-left bigger-140 middle"></i>
																		</span>
																	</li>

																	<li>
																		<span>
																			<input value="1" maxlength="3" type="text" />
																		</span>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-caret-right bigger-140 middle"></i>
																		</a>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-step-forward middle"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>

														<div class="hide message-footer message-footer-style2 clearfix">
															<div class="pull-left"> simpler footer </div>

															<div class="pull-right">
																<div class="inline middle"> message 1 of 151 </div>

																&nbsp; &nbsp;
																<ul class="pagination middle">
																	<li class="disabled">
																		<span>
																			<i class="ace-icon fa fa-angle-left bigger-150"></i>
																		</span>
																	</li>

																	<li>
																		<a href="#">
																			<i class="ace-icon fa fa-angle-right bigger-150"></i>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div><!-- /.tab-content -->
										</div><!-- /.tabbable -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								<form id="id-message-form" class="hide form-horizontal message-form col-xs-12">
									<div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>

											<div class="col-sm-9">
												<span class="input-icon">
													<input type="email" name="recipient" id="form-field-recipient" data-value="alex@doe.com" value="alex@doe.com" placeholder="Recipient(s)" />
													<i class="ace-icon fa fa-user"></i>
												</span>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>

											<div class="col-sm-6 col-xs-12">
												<div class="input-icon block col-xs-12 no-padding">
													<input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject" placeholder="Subject" />
													<i class="ace-icon fa fa-comment-o"></i>
												</div>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right">
												<span class="inline space-24 hidden-480"></span>
												Message:
											</label>

											<div class="col-sm-9">
												<div class="wysiwyg-editor"></div>
											</div>
										</div>

										<div class="hr hr-18 dotted"></div>

										<div class="form-group no-margin-bottom">
											<label class="col-sm-3 control-label no-padding-right">Attachments:</label>

											<div class="col-sm-9">
												<div id="form-attachments">
													<input type="file" name="attachment[]" />
												</div>
											</div>
										</div>

										<div class="align-right">
											<button id="id-add-attachment" type="button" class="btn btn-sm btn-danger">
												<i class="ace-icon fa fa-paperclip bigger-140"></i>
												Add Attachment
											</button>
										</div>

										<div class="space"></div>
									</div>
								</form>

								<div class="hide message-content" id="id-message-content">
									<div class="message-header clearfix">
										<div class="pull-left">
											<span class="blue bigger-125"> Clik to open this message </span>

											<div class="space-4"></div>

											<i class="ace-icon fa fa-star orange2"></i>

											&nbsp;
											<img class="middle" alt="John's Avatar" src="ace-master/assets/images/avatars/avatar.png" width="32" />
											&nbsp;
											<a href="#" class="sender">John Doe</a>

											&nbsp;
											<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
											<span class="time grey">Today, 7:15 pm</span>
										</div>

										<div class="pull-right action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-reply green icon-only bigger-130"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-mail-forward blue icon-only bigger-130"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-trash-o red icon-only bigger-130"></i>
											</a>
										</div>
									</div>

									<div class="hr hr-double"></div>

									<div class="message-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>

										<p>
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>

										<p>
											Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>

										<p>
											Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>

										<p>
											Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>

										<p>
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>
									</div>

									<div class="hr hr-double"></div>

									<div class="message-attachment clearfix">
										<div class="attachment-title">
											<span class="blue bolder bigger-110">Attachments</span>
											&nbsp;
											<span class="grey">(2 files, 4.5 MB)</span>

											<div class="inline position-relative">
												<a href="#" data-toggle="dropdown" class="dropdown-toggle">
													&nbsp;
													<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
												</a>

												<ul class="dropdown-menu dropdown-lighter">
													<li>
														<a href="#">Download all as zip</a>
													</li>

													<li>
														<a href="#">Display in slideshow</a>
													</li>
												</ul>
											</div>
										</div>

										&nbsp;
										<ul class="attachment-list pull-left list-unstyled">
											<li>
												<a href="#" class="attached-file">
													<i class="ace-icon fa fa-file-o bigger-110"></i>
													<span class="attached-name">Document1.pdf</span>
												</a>

												<span class="action-buttons">
													<a href="#">
														<i class="ace-icon fa fa-download bigger-125 blue"></i>
													</a>

													<a href="#">
														<i class="ace-icon fa fa-trash-o bigger-125 red"></i>
													</a>
												</span>
											</li>

											<li>
												<a href="#" class="attached-file">
													<i class="ace-icon fa fa-film bigger-110"></i>
													<span class="attached-name">Sample.mp4</span>
												</a>

												<span class="action-buttons">
													<a href="#">
														<i class="ace-icon fa fa-download bigger-125 blue"></i>
													</a>

													<a href="#">
														<i class="ace-icon fa fa-trash-o bigger-125 red"></i>
													</a>
												</span>
											</li>
										</ul>

										<div class="attachment-images pull-right">
											<div class="vspace-4-sm"></div>

											<div>
												<img width="36" alt="image 4" src="ace-master/assets/images/gallery/thumb-4.jpg" />
												<img width="36" alt="image 3" src="ace-master/assets/images/gallery/thumb-3.jpg" />
												<img width="36" alt="image 2" src="ace-master/assets/images/gallery/thumb-2.jpg" />
												<img width="36" alt="image 1" src="ace-master/assets/images/gallery/thumb-1.jpg" />
											</div>
										</div>
									</div>
								</div><!-- /.message-content -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="ace-master/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="ace-master/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='ace-master/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="ace-master/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="ace-master/assets/js/bootstrap-tag.min.js"></script>
		<script src="ace-master/assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="ace-master/assets/js/bootstrap-wysiwyg.min.js"></script>

		<!-- ace scripts -->
		<script src="ace-master/assets/js/ace-elements.min.js"></script>
		<script src="ace-master/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($){
			
				//handling tabs and loading/displaying relevant messages and forms
				//not needed if using the alternative view, as described in docs
				$('#inbox-tabs a[data-toggle="tab"]').on('show.bs.tab', function (e) {
					var currentTab = $(e.target).data('target');
					if(currentTab == 'write') {
						Inbox.show_form();
					}
					else if(currentTab == 'inbox') {
						Inbox.show_list();
					}
				})
			
			
				
				//basic initializations
				$('.message-list .message-item input[type=checkbox]').removeAttr('checked');
				$('.message-list').on('click', '.message-item input[type=checkbox]' , function() {
					$(this).closest('.message-item').toggleClass('selected');
					if(this.checked) Inbox.display_bar(1);//display action toolbar when a message is selected
					else {
						Inbox.display_bar($('.message-list input[type=checkbox]:checked').length);
						//determine number of selected messages and display/hide action toolbar accordingly
					}		
				});
			
			
				//check/uncheck all messages
				$('#id-toggle-all').removeAttr('checked').on('click', function(){
					if(this.checked) {
						Inbox.select_all();
					} else Inbox.select_none();
				});
				
				//select all
				$('#id-select-message-all').on('click', function(e) {
					e.preventDefault();
					Inbox.select_all();
				});
				
				//select none
				$('#id-select-message-none').on('click', function(e) {
					e.preventDefault();
					Inbox.select_none();
				});
				
				//select read
				$('#id-select-message-read').on('click', function(e) {
					e.preventDefault();
					Inbox.select_read();
				});
			
				//select unread
				$('#id-select-message-unread').on('click', function(e) {
					e.preventDefault();
					Inbox.select_unread();
				});
			
				/////////
			
				//display first message in a new area
				$('.message-list .message-item:eq(0) .text').on('click', function() {
					//show the loading icon
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					
					$('.message-inline-open').removeClass('message-inline-open').find('.message-content').remove();
			
					var message_list = $(this).closest('.message-list');
			
					$('#inbox-tabs a[href="#inbox"]').parent().removeClass('active');
					//some waiting
					setTimeout(function() {
			
						//hide everything that is after .message-list (which is either .message-content or .message-form)
						message_list.next().addClass('hide');
						$('.message-container').find('.message-loading-overlay').remove();
			
						//close and remove the inline opened message if any!
			
						//hide all navbars
						$('.message-navbar').addClass('hide');
						//now show the navbar for single message item
						$('#id-message-item-navbar').removeClass('hide');
			
						//hide all footers
						$('.message-footer').addClass('hide');
						//now show the alternative footer
						$('.message-footer-style2').removeClass('hide');
						
						
						//move .message-content next to .message-list and hide .message-list
						$('.message-content').removeClass('hide').insertAfter(message_list.addClass('hide'));
			
						//add scrollbars to .message-body
						$('.message-content .message-body').ace_scroll({
							size: 150,
							mouseWheelLock: true,
							styleClass: 'scroll-visible'
						});
			
					}, 500 + parseInt(Math.random() * 500));
				});
			
			
				//display second message right inside the message list
				$('.message-list .message-item:eq(1) .text').on('click', function(){
					var message = $(this).closest('.message-item');
			
					//if message is open, then close it
					if(message.hasClass('message-inline-open')) {
						message.removeClass('message-inline-open').find('.message-content').remove();
						return;
					}
			
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					setTimeout(function() {
						$('.message-container').find('.message-loading-overlay').remove();
						message
							.addClass('message-inline-open')
							.append('<div class="message-content" />')
						var content = message.find('.message-content:last').html( $('#id-message-content').html() );
			
						//remove scrollbar elements
						content.find('.scroll-track').remove();
						content.find('.scroll-content').children().unwrap();
						
						content.find('.message-body').ace_scroll({
							size: 150,
							mouseWheelLock: true,
							styleClass: 'scroll-visible'
						});
				
					}, 500 + parseInt(Math.random() * 500));
					
				});
			
			
			
				//back to message list
				$('.btn-back-message-list').on('click', function(e) {
					
					e.preventDefault();
					$('#inbox-tabs a[href="#inbox"]').tab('show');
				});
			
			
			
				//hide message list and display new message form
				/**
				$('.btn-new-mail').on('click', function(e){
					e.preventDefault();
					Inbox.show_form();
				});
				*/
			
			
			
			
				var Inbox = {
					//displays a toolbar according to the number of selected messages
					display_bar : function (count) {
						if(count == 0) {
							$('#id-toggle-all').removeAttr('checked');
							$('#id-message-list-navbar .message-toolbar').addClass('hide');
							$('#id-message-list-navbar .message-infobar').removeClass('hide');
						}
						else {
							$('#id-message-list-navbar .message-infobar').addClass('hide');
							$('#id-message-list-navbar .message-toolbar').removeClass('hide');
						}
					}
					,
					select_all : function() {
						var count = 0;
						$('.message-item input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						
						$('#id-toggle-all').get(0).checked = true;
						
						Inbox.display_bar(count);
					}
					,
					select_none : function() {
						$('.message-item input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						$('#id-toggle-all').get(0).checked = false;
						
						Inbox.display_bar(0);
					}
					,
					select_read : function() {
						$('.message-unread input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						
						var count = 0;
						$('.message-item:not(.message-unread) input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						Inbox.display_bar(count);
					}
					,
					select_unread : function() {
						$('.message-item:not(.message-unread) input[type=checkbox]').removeAttr('checked').closest('.message-item').removeClass('selected');
						
						var count = 0;
						$('.message-unread input[type=checkbox]').each(function(){
							this.checked = true;
							$(this).closest('.message-item').addClass('selected');
							count++;
						});
						
						Inbox.display_bar(count);
					}
				}
			
				//show message list (back from writing mail or reading a message)
				Inbox.show_list = function() {
					$('.message-navbar').addClass('hide');
					$('#id-message-list-navbar').removeClass('hide');
			
					$('.message-footer').addClass('hide');
					$('.message-footer:not(.message-footer-style2)').removeClass('hide');
			
					$('.message-list').removeClass('hide').next().addClass('hide');
					//hide the message item / new message window and go back to list
				}
			
				//show write mail form
				Inbox.show_form = function() {
					if($('.message-form').is(':visible')) return;
					if(!form_initialized) {
						initialize_form();
					}
					
					
					var message = $('.message-list');
					$('.message-container').append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>');
					
					setTimeout(function() {
						message.next().addClass('hide');
						
						$('.message-container').find('.message-loading-overlay').remove();
						
						$('.message-list').addClass('hide');
						$('.message-footer').addClass('hide');
						$('.message-form').removeClass('hide').insertAfter('.message-list');
						
						$('.message-navbar').addClass('hide');
						$('#id-message-new-navbar').removeClass('hide');
						
						
						//reset form??
						$('.message-form .wysiwyg-editor').empty();
					
						$('.message-form .ace-file-input').closest('.file-input-container:not(:first-child)').remove();
						$('.message-form input[type=file]').ace_file_input('reset_input');
						
						$('.message-form').get(0).reset();
						
					}, 300 + parseInt(Math.random() * 300));
				}
			
			
			
			
				var form_initialized = false;
				function initialize_form() {
					if(form_initialized) return;
					form_initialized = true;
					
					//intialize wysiwyg editor
					$('.message-form .wysiwyg-editor').ace_wysiwyg({
						toolbar:
						[
							'bold',
							'italic',
							'strikethrough',
							'underline',
							null,
							'justifyleft',
							'justifycenter',
							'justifyright',
							null,
							'createLink',
							'unlink',
							null,
							'undo',
							'redo'
						]
					}).prev().addClass('wysiwyg-style1');
			
			
			
					//file input
					$('.message-form input[type=file]').ace_file_input()
					.closest('.ace-file-input')
					.addClass('width-90 inline')
					.wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>');
			
					//Add Attachment
					//the button to add a new file input
					$('#id-add-attachment')
					.on('click', function(){
						var file = $('<input type="file" name="attachment[]" />').appendTo('#form-attachments');
						file.ace_file_input();
						
						file.closest('.ace-file-input')
						.addClass('width-90 inline')
						.wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>')
						.parent().append('<div class="action-buttons pull-right col-xs-1">\
							<a href="#" data-action="delete" class="middle">\
								<i class="ace-icon fa fa-trash-o red bigger-130 middle"></i>\
							</a>\
						</div>')
						.find('a[data-action=delete]').on('click', function(e){
							//the button that removes the newly inserted file input
							e.preventDefault();
							$(this).closest('.file-input-container').hide(300, function(){ $(this).remove() });
						});
					});
				}//initialize_form
			
				//turn the recipient field into a tag input field!
				/**	
				var tag_input = $('#form-field-recipient');
				try { 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				} catch(e) {}
			
			
				//and add form reset functionality
				$('#id-message-form').on('reset', function(){
					$('.message-form .message-body').empty();
					
					$('.message-form .ace-file-input:not(:first-child)').remove();
					$('.message-form input[type=file]').ace_file_input('reset_input_ui');
			
					var val = tag_input.data('value');
					tag_input.parent().find('.tag').remove();
					$(val.split(',')).each(function(k,v){
						tag_input.before('<span class="tag">'+v+'<button class="close" type="button">&times;</button></span>');
					});
				});
				*/
			
			});
		</script>
	</body>
<div id="footer"><table width="100%"><tbody><tr class=""><td class="left"><span class="copyright">0.367 seconde - 12.21 Mio</span></td><td class="copyright">Une nouvelle version est disponible : <a href="http://www.glpi-project.org" target="_blank" title="Vous la trouverez sur le site GLPI-PROJECT.org.">  0.90.3
</a></td><td class="right"><a href="http://glpi-project.org/"><span class="copyright">GLPI 0.85.5 Copyright (C) 2003-2017 by the INDEPNET Development Team.</span></a></td></tr></tbody></table></div>



