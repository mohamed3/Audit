<?php

$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
mysql_select_db('glpi855',$con);


	

$xml = simplexml_load_file('C:\xampp\htdocs\glpi\plugins\audit\front\xml\Transit Sousse.nessus');

foreach ($xml ->children() as $Report) {
	

foreach ($Report ->children() as $ReportHost) {
	
		 $LigaId=$ReportHost->attributes();
		 
		
		
	
	//$LiagDate=$ReportHost->tag->attributes();
   
   // print "ip de l'host: {$ReportHost->name} <br />\n";
   // print "Id de l'host: {$ReportHost->id} <hr />\n";
 foreach ($ReportHost ->children() as $ReportItem) {
		  $LigaItem=$ReportItem->attributes();
		  
		  $a=$LigaItem['pluginID'];
		  $b=$LigaId['name'];
		  $c=$LigaItem['pluginName'];
		  $d=$LigaItem['severity'];
		  $e=$LigaItem['protocol'];
		  
		  foreach ($ReportItem ->children() as $tag){
			  
			if ($tag['name']=="HOST_START") 
			{    
					$date=date_create($tag);
					
					$date=date_format($date,'Y-m-d H:i:s');
					
				
		     }
			 }
		  if ($b!=""){
			$query='INSERT INTO glpi_scan  
								VALUES ("","'.$a.'","'.$b.'","'.$c.'","'.$d.'","'.$Report['name'].'","'.$ReportItem->description.'",
								"'.$ReportItem->solution.'","","'.$e.'","'.$date.'")';
				
	//$res=mysql_query($query);								
		mysql_query($query) or die ('erreur SQL '.$query.'<br>'.mysql_error());
	/*if ($res)
		echo "ok";

		else echo "erreur <br>";*/	
		  }
  

}


}

}	

header('Location: http://200.1.1.22/glpi/plugins/audit/front/config.form.php');


?>