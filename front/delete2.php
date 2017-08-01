<?php 

$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
mysql_select_db('glpi855',$con);
$id=$_GET["id"];

$sql="DELETE FROM glpi_scan_man WHERE id=".$id." "	;					 
mysql_query($sql) or die (mysql_error());
				

header('Location: http://200.1.1.22/glpi/plugins/audit/front/scan.php');
		
		

?>