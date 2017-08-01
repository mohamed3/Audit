<!--<meta http-equiv="refresh" content="0; URL=http://200.1.1.22/glpi/plugins/audit/front/scan.php" />

-->
<?php

$ip=$_POST['addr'];


$con=mysql_connect("200.1.1.22","root","stip2015") or die ("erreur");
mysql_select_db('glpi855',$con);
				
					
switch ($ip) {
	
	//Siege
    case "200.1.1.1":   $id=84;    break;
    case "200.1.1.2":   $id=20;    break;
    case "200.1.1.3":   $id=22;    break;
	case "200.1.1.4":   $id=24;    break;
	case "200.1.1.5":   $id=26;    break;
	case "200.1.1.6":   $id=28;    break;
    case "200.1.1.7":   $id=30;    break;
    case "200.1.1.8":   $id=32;    break;
	case "200.1.1.9":   $id=34;    break;
	case "200.1.1.10":  $id=36;    break;
	case "200.1.1.11":  $id=38;    break;
	case "200.1.1.12":  $id=40;    break;
	case "200.1.1.13":  $id=42;    break;
	case "200.1.1.14":  $id=44;    break;
	case "200.1.1.15":  $id=117;   break;
	case "200.1.1.16":  $id=119;   break;
	case "200.1.1.17":  $id=121;   break;
	case "200.1.1.18":  $id=123;   break;	
	case "200.1.1.19":  $id=125;   break;
	case "200.1.1.20":  $id=127;   break;	
	case "200.1.1.21":  $id=129;   break;
	case "200.1.1.22":  $id=131;   break;	
	case "200.1.1.23":  $id=133;   break;	
	case "200.1.1.24":  $id=135;   break;
	case "200.1.1.25":  $id=137;   break;	
	case "200.1.1.26":  $id=139;   break;
	case "200.1.1.27":  $id=141;   break;	
	case "200.1.1.28":  $id=143;   break;	
	case "200.1.1.29":  $id=145;   break;	
	case "200.1.1.30":  $id=147;   break;
	case "200.1.1.31":  $id=149;   break;	
	case "200.1.1.32":  $id=154;   break;	
	case "200.1.1.33":  $id=156;   break;
	case "200.1.1.34":  $id=158;   break;
	case "200.1.1.35":  $id=160;   break;	
	case "200.1.1.36":  $id=162;   break;	
	case "200.1.1.37":  $id=164;   break;	
	case "200.1.1.38":  $id=166;   break;	
	case "200.1.1.39":  $id=168;   break;	
	case "200.1.1.40":  $id=170;   break;	
	case "200.1.1.41":  $id=172;   break;
	case "200.1.1.42":  $id=174;   break;
	case "200.1.1.43":  $id=176;   break;
	case "200.1.1.44":  $id=178;   break;
	case "200.1.1.45":  $id=180;   break;
	case "200.1.1.46":  $id=182;   break;
	case "200.1.1.47":  $id=184;   break;
	case "200.1.1.48":  $id=186;   break;
	case "200.1.1.49":  $id=188;   break;
	case "200.1.1.50":  $id=190;   break;

	//Msaken
	case "128.91.50.1":  $id=192;   break;
	case "128.91.50.2":  $id=194;   break;
	case "128.91.50.3":  $id=196;   break;
	case "128.91.50.4":  $id=198;   break;
	case "128.91.50.5":  $id=200;   break;
	case "128.91.50.5":  $id=200;   break;
	
	//Menzel Bourguiba
	case "128.91.100.1":  $id=202;   break;
	case "128.91.100.2":  $id=204;   break;
	case "128.91.100.3":  $id=206;   break;
	case "128.91.100.4":  $id=208;   break;
	case "128.91.100.5":  $id=210;   break;
	
	//Transit
	case "192.168.2.1":  $id=222;   break;
	case "192.168.2.2":  $id=224;   break;
	case "192.168.2.3":  $id=226;   break;
	case "192.168.2.4":  $id=228;   break;
	case "192.168.2.5":  $id=230;   break;
	
	//Depot KS
	case "192.168.1.1":  $id=212;   break;
	case "192.168.1.2":  $id=214;   break;
	case "192.168.1.3":  $id=216;   break;
	case "192.168.1.4":  $id=218;   break;
	case "192.168.1.5":  $id=220;   break;
	
	default:			 $id=0;
}
if ($id!=0){
echo '<script>confirm("Le Scan en cours ... Merci de Patienter !!  ");</script>';	
}

if ($id!=0){

	
include('Net/SSH2.php');

$ssh = new Net_SSH2('200.1.1.201', 22);
$ssh->login('root', 'root');
$ssh->enablePTY();
$ssh->exec('python /ns.py -sS "'.$id.'"');
//$ssh->exec('ls');
$ssh->read();

	
	
	//header ("Location: verif2.php?ip=".$ip);
		sleep(600);
		$ssh->exec('/./export_scans.sh');
		$ssh->read();
		
		/*sleep(60);
		$ssh->exec('smbclient -U administrateur%preprod123# //200.1.1.22/xml -c  \'put ""'.$ip.'".nessus"\'');
		echo $ssh->read();*/
		
		
	header('Location: http://200.1.1.22/glpi/plugins/audit/front/verif2.php?ip='.$ip.'');	

}
else {
	echo  '<script>alert("	Verifier l\'adresse IP ! ");
				   document.location.replace("http://200.1.1.22/glpi/plugins/audit/front/scan.php" ); 
				</script>';
	

	}
	
?>