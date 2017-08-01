<!--<meta http-equiv="refresh" content="0; URL=http://200.1.1.22/glpi/plugins/audit/front/Siege.php" />
-->
<?php
$ip=$_GET["ip"];

		include('Net/SSH2.php');

		$ssh = new Net_SSH2('200.1.1.201', 22);
		$ssh->login('root', 'root');
		$ssh->enablePTY();
		
		$ssh->exec('smbclient -U administrateur%preprod123# //200.1.1.22/xml -c  \'put ""'.$ip.'".nessus"\'');
		$ssh->read();
		sleep(20);
		
		

$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
mysql_select_db('glpi855',$con);


	

$xml = simplexml_load_file('C:\xampp\htdocs\glpi\plugins\audit\front\xml\/'.$ip.'.nessus');

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
		  $f=$LigaItem['pluginFamily'];
		  
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
								"'.$ReportItem->solution.'","'.$f.'","'.$e.'","'.$date.'")';
			
			
	//$res=mysql_query($query);								
		mysql_query($query) or die ('erreur SQL '.$query.'<br>'.mysql_error());
	/*if ($res)
		echo "ok";

		else echo "erreur <br>";*/	
		  }
  

}


}

}

			$pos1 = stripos($ip, "200.1.1");
				if ($pos1!==false){$site="Siege";}

			$pos2 = stripos($ip, "128.91.50");		
				if ($pos2!==false){$site="Msaken";}

			$pos3 = stripos($ip, "128.91.100");
				if ($pos3!==false){$site="Mensel Bourguiba";}

			$pos4 = stripos($ip, "192.168.1");
				if ($pos4!==false){$site="Depot KS";}

			$pos5 = stripos($ip, "192.168.2");	
				if ($pos5!==false){$site="Transit";}
			
			
			$sql="INSERT INTO glpi_scan_man (id,adresse_ip,site,date,a)VALUES ('','".$ip."','".$site."','".$date."','')  "	;					 
			mysql_query($sql) or die (mysql_error());
				

header('Location: http://200.1.1.22/glpi/plugins/audit/front/scan.php');
		
		
	
?>