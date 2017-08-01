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
//$cheminSmarty = getAbsolutePath()."plugins/audit/Smarty";
 
// définition de l'emplacement de la bibliothèque
//define('SMARTY_DIR', $cheminSmarty."/libs/");

// instanciation de la class Smarty
//require_once(SMARTY_DIR . 'Smarty.class.php');
//$smarty = new Smarty();

// définition des dossiers Smarty
/*$smarty->template_dir = $cheminSmarty."/templates/";
$smarty->compile_dir = $cheminSmarty."/templates_c/";
$smarty->config_dir = $cheminSmarty."/configs/";
$smarty->cache_dir = $cheminSmarty."/cache/"; 
*/
//Instanciation de la class config
$config = new PluginAuditConfig();

//Envoie des variables à Smarty
//$smarty->assign('configuration', $config->getConfiguration());
//$smarty->assign('httpPath', getHttpPath());
//$smarty->assign('absolutePath',  getAbsolutePath());

//Affichage de l'entête GLPI (fonction native GLPI)
HTML::header('Configuration Plugin Audit');
//Affichage du plugin
//$smarty->display('config.tpl');
//Affichage du pied de page GLPI (fonction native GLPI)


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




<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="utf-8">
		<title>Audit</title>

		<meta name="description" content="overview &amp; stats">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="ace-master/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="ace-master/assets/css/fonts.googleapis.com.css">

		<!-- ace styles -->
		<link rel="stylesheet" href="ace-master/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style">

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="ace-master/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="ace-master/assets/css/ace-skins.min.css">
		<link rel="stylesheet" href="ace-master/assets/css/ace-rtl.min.css">

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="ace-master/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="ace-master/assets/js/ace-extra.min.js"></script><style>@keyframes nodeInserted{from{outline-color:#fff}to{outline-color:#000}}@-moz-keyframes nodeInserted{from{outline-color:#fff}to{outline-color:#000}}@-webkit-keyframes nodeInserted{from{outline-color:#fff}to{outline-color:#000}}@-ms-keyframes nodeInserted{from{outline-color:#fff}to{outline-color:#000}}@-o-keyframes nodeInserted{from{outline-color:#fff}to{outline-color:#000}}.ace-save-state{animation-duration:10ms;-o-animation-duration:10ms;-ms-animation-duration:10ms;-moz-animation-duration:10ms;-webkit-animation-duration:10ms;animation-delay:0s;-o-animation-delay:0s;-ms-animation-delay:0s;-moz-animation-delay:0s;-webkit-animation-delay:0s;animation-name:nodeInserted;-o-animation-name:nodeInserted;-ms-animation-name:nodeInserted;-moz-animation-name:nodeInserted;-webkit-animation-name:nodeInserted}</style>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="ace-master/assets/js/html5shiv.min.js"></script>
		<script src="ace-master/assets/js/respond.min.js"></script>
		<![endif]-->
	<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

	<body class="no-skin">
		

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
					<li class="active">
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
 					<li class="">
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

					

					

					

					
				</ul></div></div>
				<div class="ace-scroll nav-scroll">
				<div class="scroll-track scroll-active" style="display: block; height: 309px;">
				<div class="scroll-bar" style="top: 0px; transition-property: top; transition-duration: 0.1s; height: 239px;">
				</div>
				</div>
				<div class="scroll-content" style="max-height: 309px;">
				<div style="height: 400px; width: 8px;"></div></div></div></div><!-- /.nav-list -->
				<!--
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse" style="z-index: 1;">
					<i id="sidebar-toggle-icon" class="ace-save-state ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>-->
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="<!--breadcrumbs ace-save-state breadcrumbs-fixed-->" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Acceuil</a>
							</li>
							<li class="active">Tableau de bord</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off">
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

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
								Niveau de Securite 
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Etat  <?php echo date("01-n-y"); ?>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<?php 
								$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
								mysql_select_db('glpi855',$con);
								$reponse1 = mysql_query("SELECT * FROM glpi_scan where DAY(date)='2' AND MONTH(date) like '%".date("n")."%'" ) or die ('erreur SQL '.$query.'<br>'.mysql_error());
														$nbv0=0;
														$nbv1=0;
														$nbv2=0;
														$nbv3=0;
														$nbv4=0;
														
														while($donnees = mysql_fetch_array($reponse1)){
															//if ($donnees['description_scan']!=""){
																
																		if ($donnees['titre_v'] == "Depot KS"){
																			$nbv0=$nbv0+1;
																			if ($donnees['niveau_v'] == "0"){$nb00=$nb00+1;}
																			if ($donnees['niveau_v'] == "1"){$nb10=$nb10+1;}
																			if ($donnees['niveau_v'] == "2"){$nb20=$nb20+1;}
																			if ($donnees['niveau_v'] == "3"){$nb30=$nb30+1;}
																			if ($donnees['niveau_v'] == "4"){$nb40=$nb40+1;}
																		
																		}
																		if ($donnees['titre_v'] == "Siege"){
																			$nbv1=$nbv1+1;
																			if ($donnees['niveau_v'] == "0"){$nb000=$nb000+1;}
																			if ($donnees['niveau_v'] == "1"){$nb100=$nb100+1;}
																			if ($donnees['niveau_v'] == "2"){$nb200=$nb200+1;}
																			if ($donnees['niveau_v'] == "3"){$nb300=$nb300+1;}
																			if ($donnees['niveau_v'] == "4"){$nb400=$nb400+1;}
																			}
																		if ($donnees['titre_v'] == "Transit Sousse"){
																			$nbv2=$nbv2+1;
																			if ($donnees['niveau_v'] == "0"){$nb0000=$nb0000+1;}
																			if ($donnees['niveau_v'] == "1"){$nb1000=$nb1000+1;}
																			if ($donnees['niveau_v'] == "2"){$nb2000=$nb2000+1;}
																			if ($donnees['niveau_v'] == "3"){$nb3000=$nb3000+1;}
																			if ($donnees['niveau_v'] == "4"){$nb4000=$nb4000+1;}
																			}
																		if ($donnees['titre_v'] == "usine MB"){
																			$nbv3=$nbv3+1;
																			if ($donnees['niveau_v'] == "0"){$nb00000=$nb00000+1;}
																			if ($donnees['niveau_v'] == "1"){$nb10000=$nb10000+1;}
																			if ($donnees['niveau_v'] == "2"){$nb20000=$nb20000+1;}
																			if ($donnees['niveau_v'] == "3"){$nb30000=$nb30000+1;}
																			if ($donnees['niveau_v'] == "4"){$nb40000=$nb40000+1;}
																			}
																		if ($donnees['titre_v'] == "Usine Msaken"){
																			$nbv4=$nbv4+1;
																			if ($donnees['niveau_v'] == "0"){$nb000000=$nb000000+1;}
																			if ($donnees['niveau_v'] == "1"){$nb100000=$nb100000+1;}
																			if ($donnees['niveau_v'] == "2"){$nb200000=$nb200000+1;}
																			if ($donnees['niveau_v'] == "3"){$nb300000=$nb300000+1;}
																			if ($donnees['niveau_v'] == "4"){$nb400000=$nb400000+1;}
																			}
															}
								
								
								
								?>

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-7 infobox-container">
										

										

										

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-flask"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $nb40+$nb400+$nb4000+$nb40000+$nb400000 ?></span>
												<div class="infobox-content">Critique</div>
											</div>
										</div>

										<div class="infobox infobox-orange2">
											<div class="infobox-chart">
												<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"><canvas width="44" height="26" style="display: inline-block; width: 44px; height: 26px; vertical-align: top;"></canvas></span>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number"><?php echo $nbv0+$nbv1+$nbv2+$nbv3+$nbv4 ?></span>
												<div class="infobox-content">Vulnerabilites Detecter</div>
											</div>

											
										</div>

										<div class="infobox infobox-blue2">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="80" data-size="46" style="height: 46px; width: 46px; line-height: 45px;">
													<span class="percent"><?php echo number_format(($nb00+$nb000+$nb0000+$nb00000+$nb000000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4),1,'.',',') ?></span>%
												<canvas height="46" width="46"></canvas></div>
											</div>

											<div class="infobox-data">
												<span class="infobox-text">Info</span>

												
											</div>
										</div>

										<div class="space-6"></div>
										<!--

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div class="easy-pie-chart percentage" data-percent="61" data-size="39" style="height: 39px; width: 39px; line-height: 38px;">
													<span class="percent">61</span>%
												<canvas height="39" width="39"></canvas></div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Task</div>
												<div class="infobox-content">Completion</div>
											</div>
										</div>

										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-chart">
												<span class="sparkline" data-values="3,4,2,3,4,4,2,2"><canvas width="39" height="15" style="display: inline-block; width: 39px; height: 15px; vertical-align: top;"></canvas></span>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Earnings</div>
												<div class="infobox-content">$32,000</div>
											</div>
										</div>

										<div class="infobox infobox-grey infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-download"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Downloads</div>
												<div class="infobox-content">1,205</div>
											</div>
										</div>-->
									</div>

									<div class="vspace-12-sm"></div>

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5 class="widget-title">
													<i class="ace-icon fa fa-signal"></i>
													Vulnerabilites
												</h5>

												<div class="widget-toolbar no-border">
													<div class="inline dropdown-hover">
														<button class="btn btn-minier btn-primary">
															<?php echo date("F"); ?>
															<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
														</button>

														<!--<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
															--><li class="active">
																<a href="#" class="blue">
																	<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
																	
																</a>
															</li>
															<!--

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Week
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	This Month
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																	Last Month
																</a>
															</li>
														</ul>-->
													</div>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder" style="width: 90%; min-height: 150px; padding: 0px; position: relative;">
													
													<canvas class="flot-base" width="384" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;">
													</canvas>
													<canvas class="flot-overlay" width="384" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;">
													</canvas>
													
													<div class="legend"><div style="position: absolute; width: 80px; height: 110px; top: 15px; right: -30px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div>
													<table style="position:absolute;top:15px;right:-30px;;font-size:smaller;color:#545454">
													
													<tbody>
													<tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px">
													
													<div style="width:4px;height:0;border:5px solid #68BC31;overflow:hidden"></div></div></td>
													
													<td class="legendLabel">Moyenne </td></tr><tr>
													<td class="legendColorBox">
													<div style="border:1px solid null;padding:1px">
													<div style="width:4px;height:0;border:5px solid #2091CF;overflow:hidden"></div></div></td>
													
													<td class="legendLabel">Faible</td></tr><tr>
													<td class="legendColorBox"><div style="border:1px solid null;padding:1px">
													<div style="width:4px;height:0;border:5px solid #AF4E96;overflow:hidden"></div></div></td>
													
													<td class="legendLabel">Info</td></tr><tr><td class="legendColorBox">
													<div style="border:1px solid null;padding:1px">
													<div style="width:4px;height:0;border:5px solid #DA5430;overflow:hidden"></div></div></td>
													
													<td class="legendLabel">Critique</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px">
													<div style="width:4px;height:0;border:5px solid #FEE074;overflow:hidden"></div></div></td>
													
													<td class="legendLabel">Hight</td></tr>
													</tbody></table></div></div>

													<div class="hr hr8 hr-double"></div>

													<!--
													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
																&nbsp; likes
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
																&nbsp; tweets
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
																&nbsp; pins
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>-->
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								<div class="row">
									<div class="col-sm-5">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-flat">
												<h4 class="widget-title lighter">
													<i class="ace-icon fa fa-star orange"></i>
													Vulnerabilites par Site
												</h4>

												<div class="widget-toolbar">
													<a href="#" data-action="collapse">
														<i class="ace-icon fa fa-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-bordered table-striped">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Adresse IP
																</th>

																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Vulnerabilites 
																</th>
																
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Sites 
																</th>
																<th>
																	<i class="ace-icon fa fa-caret-right blue"></i>Date 
																</th>

																<th class="hidden-480">
																	<i class="ace-icon fa fa-caret-right blue"></i>Severite
																</th>
															</tr>
														</thead>
														<?php
														
														$reponse = mysql_query("SELECT * FROM glpi_scan where DAY(date)= '2' AND month(date) like '%".date("n")."%' group by (titre_v)") or die ('erreur SQL '.$query.'<br>'.mysql_error());

														?>
														<tbody>
														
														<?php
														$nb0=0;
														$nb1=0;
														$nb2=0;
														$nb3=0;
														$nb4=0;
														
														
														while($donnees = mysql_fetch_array($reponse)){
															//if ($donnees['description_scan']!=""){
																
																		if ($donnees['titre_v'] == "Depot KS"){$lien="ks";$add="192.168.1.0/24";$bnv=$nbv0;   $nb0=$nb00;$nb1=$nb10;$nb2=$nb20;$nb3=$nb30;$nb4=$nb40;}
																		if ($donnees['titre_v'] == "Siege"){$lien="Siege";$add="200.1.1.0/24";$bnv=$nbv1;  $nb0=$nb000;$nb1=$nb100;$nb2=$nb200;$nb3=$nb300;$nb4=$nb400;}
																		if ($donnees['titre_v'] == "Transit Sousse"){$lien="transit"; $add="192.168.2.0/24";$bnv=$nbv2;   $nb0=$nb0000;$nb1=$nb1000;$nb2=$nb2000;$nb3=$nb3000;$nb4=$nb4000;}
																		if ($donnees['titre_v'] == "usine MB"){$lien="mb"; $add="128.91.100.0/24";$bnv=$nbv3;    $nb0=$nb00000;$nb1=$nb10000;$nb2=$nb20000;$nb3=$nb30000;$nb4=$nb40000;}
																		if ($donnees['titre_v'] == "Usine Msaken"){$lien="ms"; $add="128.91.50.0/24";$bnv=$nbv4;   $nb0=$nb000000;$nb1=$nb100000;$nb2=$nb200000;$nb3=$nb300000;$nb4=$nb400000;}
															?>
															

														
															<tr>
																<td><a href="<?php echo $lien;?>.php"><?php echo $add;?></a></td>

																<td><?php echo $bnv;?></td>
																
																
																<td><?php echo $donnees['titre_v'];?></td>
																
																<td><?php echo $donnees['date'];?></td>
																
																

																<td class="hidden-480">
																
																
																		<div class="progress">
																
																			<div class="progress pos-rel" >
																				<div class="progress-bar progress-bar-danger" style="width: <?php echo (($nb4*100)/$bnv); ?>%;" ></div>
																			<div class="progress pos-rel" >
																				<div class="progress-bar progress-bar-warning" style="width: <?php echo (($nb3*100)/$bnv); ?>%;"></div>
																			<div class="progress pos-rel" >
																				<div class="progress-bar progress-bar-success" style="width: <?php echo (($nb2*100)/$bnv); ?>;"></div>
																			<div class="progress pos-rel" >
																				<div class="progress-bar" style="width:<?php echo (($nb1*100)/$bnv); ?>%;"></div>
																			<div class="progress pos-rel" >
																				<div class="infobox infobox-blue  infobox-dark" style="width:<?php echo (($nb0*100)/$bnv); ?>%;"></div>
																			</div>
																			</div>
																			</div>
																			</div>
																			</div>
																		</div>
																	
																	
																	
																	
																	
																	
																	<?php
																	
																		 /* if ($donnees['niveau_v'] == "0")
																				{?><span class="btn btn-app btn-sm btn-orange no-hover">Info</span><?php }	
																		    if ($donnees['niveau_v'] == "1")
																				{?><span class="btn btn-app btn-sm btn-primary no-hover">Faible</span><?php }
																			if ($donnees['niveau_v'] == "2")
																				{?><span class="btn btn-app btn-sm btn-success no-hover">Moyen</span><?php }
																			if ($donnees['niveau_v'] == "3")
																				{?><span class="btn btn-app btn-sm btn-yellow no-hover">Haute</span><?php }
																			if ($donnees['niveau_v'] == "4")
																				{?><span class="btn btn-app btn-sm btn-pink no-hover">Critique</span><?php }
																			*/
																	
																	?></b></span>
																</td>
															</tr>

														<?php 
														   // }
															 } 
														   mysql_close();
														
														?>
								
														</tbody>
													</table>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

									
								</div><!-- /.row -->

								<div class="hr hr32 hr-dotted"></div>

								<!-- /.row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<!--
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application © 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
-->
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse display">
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

		<!--[if lte IE 8]>
		  <script src="ace-master/assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="ace-master/assets/js/jquery-ui.custom.min.js"></script>
		<script src="ace-master/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="ace-master/assets/js/jquery.easypiechart.min.js"></script>
		<script src="ace-master/assets/js/jquery.sparkline.index.min.js"></script>
		<script src="ace-master/assets/js/jquery.flot.min.js"></script>
		<script src="ace-master/assets/js/jquery.flot.pie.min.js"></script>
		<script src="ace-master/assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="ace-master/assets/js/ace-elements.min.js"></script>
		<script src="ace-master/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "Moyenne <?php echo number_format(($nb20+$nb200+$nb2000+$nb20000+$nb200000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4),1,".",",") ?> %",  data: <?php echo ($nb20+$nb200+$nb2000+$nb20000+$nb200000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4) ?>, color: "#68BC31"},
				{ label: "Faible <?php echo number_format(($nb10+$nb100+$nb1000+$nb10000+$nb100000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4),1,".",",") ?> %",  data: <?php echo ($nb10+$nb100+$nb1000+$nb10000+$nb100000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4) ?>, color: "#2091CF"},
				{ label: "Info <?php echo number_format(($nb0+$nb00+$nb000+$nb0000+$nb00000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4),1,".",",") ?> %",  data: <?php echo ($nb00+$nb000+$nb0000+$nb00000+$nb000000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4) ?>, color: "#6FB3E0"},
				{ label: "Critique <?php echo number_format(($nb40+$nb400+$nb4000+$nb40000+$nb400000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4),1,".",",") ?> %",  data: <?php echo ($nb40+$nb400+$nb4000+$nb40000+$nb400000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4) ?>, color: "#DA5430"},
				{ label: "Hight <?php echo number_format(($nb30+$nb300+$nb3000+$nb30000+$nb300000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4),1,".",",") ?> %",  data: <?php echo ($nb30+$nb300+$nb3000+$nb30000+$nb300000)* 100 /($nbv0+$nbv1+$nbv2+$nbv3+$nbv4) ?>, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
	

<div class="tooltip top in" style="top: 304px; left: 1011px; display: none;"><div class="tooltip-inner">social networks : 38.7%</div></div></body></html>
<?php
HTML::footer();  
?>