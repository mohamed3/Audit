<?php 
$site=$_GET['site'];
$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
mysql_select_db('glpi855',$con);
$id=$_GET["id"];

$sql="DELETE FROM glpi_scan WHERE id=".$id." "	;					 
mysql_query($sql) or die (mysql_error());
				
if ($site=="siege")
	header('Location: http://200.1.1.22/glpi/plugins/audit/front/Siege.php');
if ($site=="ms")
	header('Location: http://200.1.1.22/glpi/plugins/audit/front/ms.php');
if ($site=="mb")
	header('Location: http://200.1.1.22/glpi/plugins/audit/front/mb.php');
if ($site=="ks")
	header('Location: http://200.1.1.22/glpi/plugins/audit/front/ks.php');
if ($site=="transit")
	header('Location: http://200.1.1.22/glpi/plugins/audit/front/transit.php');

else{
header('Location: http://200.1.1.22/glpi/plugins/audit/front/historique.php');
}	
		

?>