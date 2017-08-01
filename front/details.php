<?php 
$ip=$_GET['ip'];
$date=$_GET['date'];
$site=$_GET['site'];
$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
	mysql_select_db('glpi855',$con);
		 
	$reponse1 = mysql_query("SELECT max(date) FROM glpi_scan where Adresse_ip = '".$ip."' group by ('date')") or die ('erreur SQL '.$query.'<br>'.mysql_error());
	$donnees1 = mysql_fetch_array($reponse1);
	
	$repon1 = mysql_query("SELECT * FROM glpi_scan where Adresse_ip = '".$ip."' group by ('date')") or die ('erreur SQL '.$query.'<br>'.mysql_error());
	$donnee1 = mysql_fetch_array($repon1);
	
if ($donnee1['titre_v']== "Siege"){$site1="active";}
if ($donnee1['titre_v']== "Usine Msaken"){$site2="active";}	
if ($donnee1['titre_v']== "usine MB"){$site3="active";}	
if ($donnee1['titre_v']== "Transit Sousse"){$site4="active";}					
if ($donnee1['titre_v']== "Depot KS"){$site5="active";}
	
		
			
				
	
?>

<html lang="en">
	<head>
	
	<head><title>GLPI - Configuration Plugin Audit</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="Expires" content="Fri, Jun 12 1981 08:20:00 GMT">
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
	
	
	
	
	
	
	
	
	
	
	
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Scan Details de l'adresse IP : <?php echo $ip;?></title>

		<meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="ace-master/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="ace-master/assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="ace-master/assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="ace-master/assets/css/ui.jqgrid.min.css" />

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

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state <!--sidebar-fixed--> sidebar-scroll" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->

				<div class="nav-wrap-up pos-rel"><div class="nav-wrap" style="max-height: 309px;"><div style="position: relative; top: 0px; transition-property: top; transition-duration: 0.15s;"><ul class="nav nav-list">
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

					

					

					<li class="<?php echo $site1?>">
						<a href="Siege.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Siege </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php echo $site2?>">
						<a href="ms.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Usine Msaken </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php echo $site3?>">
						<a href="mb.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Usine MB </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php echo $site4?>">
						<a href="transit.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Transit Sousse </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="<?php echo $site5?>">
						<a href="ks.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">  Depot Ksar Said </span>
						</a>

						<b class="arrow"></b>
					</li>
 					<li class="">
						<a href="inbox.html">
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


					

					

					
				</ul></div></div><div class="ace-scroll nav-scroll"><div class="scroll-track scroll-active" style="display: block; height: 309px;"><div class="scroll-bar" style="top: 0px; transition-property: top; transition-duration: 0.1s; height: 239px;"></div></div><div class="scroll-content" style="max-height: 309px;"><div style="height: 400px; width: 8px;"></div></div></div></div><!-- /.nav-list -->

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
								<a href="#">Scan</a>
							</li>

							<li>
								<a href="#">@ <?php echo $ip;?></a>
							</li>
							
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
											</select><div class="dropdown dropdown-colorpicker">		<a data-toggle="dropdown" class="dropdown-toggle"><span class="btn-colorpicker" style="background-color:#438EB9"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn selected" style="background-color:#438EB9;" data-color="#438EB9"></a></li><li><a class="colorpick-btn" style="background-color:#222A2D;" data-color="#222A2D"></a></li><li><a class="colorpick-btn" style="background-color:#C6487E;" data-color="#C6487E"></a></li><li><a class="colorpick-btn" style="background-color:#D0D0D0;" data-color="#D0D0D0"></a></li></ul></div>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off">
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off">
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off">
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off">
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off">
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off">
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off">
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off">
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Vulnerabilites
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo $ip; echo "/24    <b> Date: </b>"; echo "<b>".$date."</b>";?>
								</small>
							</h1>
							</h1>
							<?php $Num= mysql_query("SELECT COUNT( * )FROM glpi_scan where id_plugin !=  '' and  date='".$date."' and Adresse_ip = '".$ip."'");
							$Num1 = mysql_fetch_array($Num);
							echo "<h1> Total: ".$Num1['COUNT( * )']."</h1>"?>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</th>
													<th class="detail-col">Details</th>
													<th>Plugin ID</th>
													<th>Nom</th>
													<th class="hidden-480">Port</th>

													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Date
													</th>
													<th class="hidden-480">Severites</th>

													<th></th>
												</tr>
											</thead>

											<tbody>
											
											<?php
				
				
					
					

					
					//$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
					//	 mysql_select_db('glpi855',$con);
					
					
						 
						 
						 
						 
						 
					$reponse = mysql_query("SELECT * FROM glpi_scan where  Adresse_ip = '".$ip."' AND date = '".$date."' order by (niveau_v) desc") or die ('erreur SQL '.$query.'<br>'.mysql_error());
						
						while($donnees = mysql_fetch_array($reponse)){
																	
							if ($donnees['description_scan']!=""){
							?>
											
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>

													<td class="center">
														
														<h4 class="pink">
														<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
														<a href="pdetails.php?id=<?php echo $donnees['id'];?>" role="button" class="green" data-toggle="modal"> Plus de Details </a>
														</h4>
														
													</td>
													
													

													<td>
														<a href="#"><?php echo $donnees['id_plugin'];?></a>
													</td>
													<td><?php echo $donnees['description_scan'];?></td>
													<td class="hidden-480"><?php echo $donnees['port_v'];?></td>
													<td><?php echo $donnees['date'];?></td>

													<td class="hidden-480">
														<?php 
														if ($donnees['niveau_v'] == "0")
															{?><span class="btn btn-app btn-sm btn-orange no-hover">Info</span><?php }	
														if ($donnees['niveau_v'] == "1")
															{?><span class="btn btn-app btn-sm btn-primary no-hover">Faible</span><?php }
														if ($donnees['niveau_v'] == "2")
															{?><span class="btn btn-app btn-sm btn-success no-hover">Moyen</span><?php }
														if ($donnees['niveau_v'] == "3")
															{?><span class="btn btn-app btn-sm btn-yellow no-hover">Haute</span><?php }
														if ($donnees['niveau_v'] == "4")
															{?><span class="btn btn-app btn-sm btn-pink no-hover">Critique</span><?php }
														?>					
													</td>

													<td>
														<div class="">
															<!--<button class="btn btn-xs btn-success">
																<i class="ace-icon fa fa-check bigger-120"></i>
															</button>

															<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></id>
															</button>-->

															<button class="">
																<a href="delete.php?id=<?php echo $donnees['id'];?>&amp;site=<?php echo $site; ?>" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
															</button>

															<!--
															<button class="btn btn-xs btn-warning">
																<i class="ace-icon fa fa-flag bigger-120"></i>
															</button>-->
														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline pos-rel">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="delete.php?id=<?php echo $donnees['id'];?>" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
													
												</tr>

												
												
												
												
												
												
												<?php 
												
													}
													}
												  ?>

												  
												  
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

								

												
												
								
								
								
								
								
								
								


								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
	
	
	
	
	

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
		<script src="ace-master/assets/js/bootstrap-datepicker.min.js"></script>
		<script src="ace-master/assets/js/jquery.jqGrid.min.js"></script>
		<script src="ace-master/assets/js/grid.locale-en.js"></script>

		<!-- ace scripts -->
		<script src="ace-master/assets/js/ace-elements.min.js"></script>
		<script src="ace-master/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			var grid_data = 
			[ 
				
			];
			
			var subgrid_data = 
			[
			 {id:"1", name:"sub grid item 1", qty: 11},
			 {id:"2", name:"sub grid item 2", qty: 3},
			 {id:"3", name:"sub grid item 3", qty: 12},
			 {id:"4", name:"sub grid item 4", qty: 5},
			 {id:"5", name:"sub grid item 5", qty: 2},
			 {id:"6", name:"sub grid item 6", qty: 9},
			 {id:"7", name:"sub grid item 7", qty: 3},
			 {id:"8", name:"sub grid item 8", qty: 8}
			];
			
			jQuery(function($) {
				var grid_selector = "#grid-table";
				var pager_selector = "#grid-pager";
				
				
				var parent_column = $(grid_selector).closest('[class*="col-"]');
				//resize to fit page size
				$(window).on('resize.jqGrid', function () {
					$(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
			    })
				
				//resize on sidebar collapse/expand
				$(document).on('settings.ace.jqGrid' , function(ev, event_name, collapsed) {
					if( event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed' ) {
						//setTimeout is for webkit only to give time for DOM changes and then redraw!!!
						setTimeout(function() {
							$(grid_selector).jqGrid( 'setGridWidth', parent_column.width() );
						}, 20);
					}
			    })
				
				//if your grid is inside another element, for example a tab pane, you should use its parent's width:
				/**
				$(window).on('resize.jqGrid', function () {
					var parent_width = $(grid_selector).closest('.tab-pane').width();
					$(grid_selector).jqGrid( 'setGridWidth', parent_width );
				})
				//and also set width when tab pane becomes visible
				$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				  if($(e.target).attr('href') == '#mygrid') {
					var parent_width = $(grid_selector).closest('.tab-pane').width();
					$(grid_selector).jqGrid( 'setGridWidth', parent_width );
				  }
				})
				*/
				
				
			
			
			
				jQuery(grid_selector).jqGrid({
					//direction: "rtl",
			
					//subgrid options
					subGrid : true,
					//subGridModel: [{ name : ['No','Item Name','Qty'], width : [55,200,80] }],
					//datatype: "xml",
					subGridOptions : {
						plusicon : "ace-icon fa fa-plus center bigger-110 blue",
						minusicon  : "ace-icon fa fa-minus center bigger-110 blue",
						openicon : "ace-icon fa fa-chevron-right center orange"
					},
					//for this example we are using local data
					subGridRowExpanded: function (subgridDivId, rowId) {
						var subgridTableId = subgridDivId + "_t";
						$("#" + subgridDivId).html("<table id='" + subgridTableId + "'></table>");
						$("#" + subgridTableId).jqGrid({
							datatype: 'local',
							data: subgrid_data,
							colNames: ['No','Item Name','Qty'],
							colModel: [
								{ name: 'id', width: 50 },
								{ name: 'name', width: 150 },
								{ name: 'qty', width: 50 }
							]
						});
					},
					
			
			
					data: grid_data,
					datatype: "local",
					height: 250,
					colNames:[' ', 'ID','','Adresse IP', '', 'Date','Severites'],
					colModel:[
						{name:'myac',index:'', width:80, fixed:true, sortable:false, resize:false,
							formatter:'actions', 
							formatoptions:{ 
								keys:true,
								//delbutton: false,//disable delete button
								
								delOptions:{recreateForm: true, beforeShowForm:beforeDeleteCallback},
								//editformbutton:true, editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback}
							}
						},
						{name:'id',index:'id', width:60, sorttype:"int", editable: true},
						{name:'plugin',index:'plugin',width:10, editable:true, sorttype:"date",unformat: pickDate},
						{name:'adresse',index:'adresse', width:250, sortable:false,editable: true,edittype:"textarea", editoptions:{rows:"2",cols:"10"}},
						{name:'nom',index:'nom', width:10, sortable:false,editable: true,edittype:"textarea", editoptions:{rows:"2",cols:"10"}},
						{name:'date',index:'date', width:250, editable: true,edittype:"select",editoptions:{value:"FE:FedEx;IN:InTime;TN:TNT;AR:ARAMEX"}},
						{name:'severite',index:'severite', width:150, sortable:false,editable: true,edittype:"textarea", editoptions:{rows:"2",cols:"10"}} 
					], 
			
					viewrecords : true,
					rowNum:10,
					rowList:[10,20,30],
					pager : pager_selector,
					altRows: true,
					//toppager: true,
					
					multiselect: true,
					//multikey: "ctrlKey",
			        multiboxonly: true,
			
					loadComplete : function() {
						var table = this;
						setTimeout(function(){
							styleCheckbox(table);
							
							updateActionIcons(table);
							updatePagerIcons(table);
							enableTooltips(table);
						}, 0);
					},
			
					editurl: "./dummy.php",//nothing is saved
					caption: "Vulnerabilites"
			
					//,autowidth: true,
			
			
					/**
					,
					grouping:true, 
					groupingView : { 
						 groupField : ['name'],
						 groupDataSorted : true,
						 plusicon : 'fa fa-chevron-down bigger-110',
						 minusicon : 'fa fa-chevron-up bigger-110'
					},
					caption: "Grouping"
					*/
			
				});
				$(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size
				
				
			
				//enable search/filter toolbar
				//jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})
				//jQuery(grid_selector).filterToolbar({});
			
			
				//switch element when editing inline
				function aceSwitch( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=checkbox]')
							.addClass('ace ace-switch ace-switch-5')
							.after('<span class="lbl"></span>');
					}, 0);
				}
				//enable datepicker
				function pickDate( cellvalue, options, cell ) {
					setTimeout(function(){
						$(cell) .find('input[type=text]')
							.datepicker({format:'yyyy-mm-dd' , autoclose:true}); 
					}, 0);
				}
			
			
				//navButtons
				jQuery(grid_selector).jqGrid('navGrid',pager_selector,
					{ 	//navbar options
						edit: true,
						editicon : 'ace-icon fa fa-pencil blue',
						add: true,
						addicon : 'ace-icon fa fa-plus-circle purple',
						del: true,
						delicon : 'ace-icon fa fa-trash-o red',
						search: true,
						searchicon : 'ace-icon fa fa-search orange',
						refresh: true,
						refreshicon : 'ace-icon fa fa-refresh green',
						view: true,
						viewicon : 'ace-icon fa fa-search-plus grey',
					},
					{
						//edit record form
						//closeAfterEdit: true,
						//width: 700,
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						}
					},
					{
						//new record form
						//width: 700,
						closeAfterAdd: true,
						recreateForm: true,
						viewPagerButtons: false,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
							.wrapInner('<div class="widget-header" />')
							style_edit_form(form);
						}
					},
					{
						//delete record form
						recreateForm: true,
						beforeShowForm : function(e) {
							var form = $(e[0]);
							if(form.data('styled')) return false;
							
							form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
							style_delete_form(form);
							
							form.data('styled', true);
						},
						onClick : function(e) {
							//alert(1);
						}
					},
					{
						//search form
						recreateForm: true,
						afterShowSearch: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
							style_search_form(form);
						},
						afterRedraw: function(){
							style_search_filters($(this));
						}
						,
						multipleSearch: true,
						/**
						multipleGroup:true,
						showQuery: true
						*/
					},
					{
						//view record form
						recreateForm: true,
						beforeShowForm: function(e){
							var form = $(e[0]);
							form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
						}
					}
				)
			
			
				
				function style_edit_form(form) {
					//enable datepicker on "sdate" field and switches for "stock" field
					form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})
					
					form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
							   //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
							  //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');
			
							
					//update buttons classes
					var buttons = form.next().find('.EditButton .fm-button');
					buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
					buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')
					
					buttons = form.next().find('.navButton a');
					buttons.find('.ui-icon').hide();
					buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
					buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');		
				}
			
				function style_delete_form(form) {
					var buttons = form.next().find('.EditButton .fm-button');
					buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
					buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
					buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
				}
				
				function style_search_filters(form) {
					form.find('.delete-rule').val('X');
					form.find('.add-rule').addClass('btn btn-xs btn-primary');
					form.find('.add-group').addClass('btn btn-xs btn-success');
					form.find('.delete-group').addClass('btn btn-xs btn-danger');
				}
				function style_search_form(form) {
					var dialog = form.closest('.ui-jqdialog');
					var buttons = dialog.find('.EditTable')
					buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
					buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
					buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
				}
				
				function beforeDeleteCallback(e) {
					var form = $(e[0]);
					if(form.data('styled')) return false;
					
					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_delete_form(form);
					
					form.data('styled', true);
				}
				
				function beforeEditCallback(e) {
					var form = $(e[0]);
					form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
					style_edit_form(form);
				}
			
			
			
				//it causes some flicker when reloading or navigating grid
				//it may be possible to have some custom formatter to do this as the grid is being created to prevent this
				//or go back to default browser checkbox styles for the grid
				function styleCheckbox(table) {
				/**
					$(table).find('input:checkbox').addClass('ace')
					.wrap('<label />')
					.after('<span class="lbl align-top" />')
			
			
					$('.ui-jqgrid-labels th[id*="_cb"]:first-child')
					.find('input.cbox[type=checkbox]').addClass('ace')
					.wrap('<label />').after('<span class="lbl align-top" />');
				*/
				}
				
			
				//unlike navButtons icons, action icons in rows seem to be hard-coded
				//you can change them like this in here if you want
				function updateActionIcons(table) {
					/**
					var replacement = 
					{
						'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
						'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
						'ui-icon-disk' : 'ace-icon fa fa-check green',
						'ui-icon-cancel' : 'ace-icon fa fa-times red'
					};
					$(table).find('.ui-pg-div span.ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
					*/
				}
				
				//replace icons with FontAwesome icons like above
				function updatePagerIcons(table) {
					var replacement = 
					{
						'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
						'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
						'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
						'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
					};
					$('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
				}
			
				function enableTooltips(table) {
					$('.navtable .ui-pg-button').tooltip({container:'body'});
					$(table).find('.ui-pg-div').tooltip({container:'body'});
				}
			
				//var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');
			
				$(document).one('ajaxloadstart.page', function(e) {
					$.jgrid.gridDestroy(grid_selector);
					$('.ui-jqdialog').remove();
				});
			});
		</script>
	</body>
<div id="footer"><table width="100%"><tbody><tr class=""><td class="left"><span class="copyright">0.367 seconde - 12.21 Mio</span></td><td class="copyright">Une nouvelle version est disponible : <a href="http://www.glpi-project.org" target="_blank" title="Vous la trouverez sur le site GLPI-PROJECT.org.">  0.90.3
</a></td><td class="right"><a href="http://glpi-project.org/"><span class="copyright">GLPI 0.85.5 Copyright (C) 2003-2017 by the INDEPNET Development Team.</span></a></td></tr></tbody></table></div>







