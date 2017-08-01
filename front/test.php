<?php


/*
$methods = array(
'kex' => 'diffie-hellman-group1-sha1',
'hostkey' => 'ssh-dss',
'client_to_server' => array(
'crypt' => '3des-cbc',
'mac' => 'hmac-md5',
'comp' => 'none'),
'server_to_client' => array(
'crypt' => '3des-cbc',
'mac' => 'hmac-md5',
'comp' => 'none'));


ssh2_connect("200.1.1.201", 22,  $methods);

*/

/*
  $adresse = '200.1.1.201'; 
      $port = 22; 
      $socket = @fsockopen($adresse, $port); 
      if (!$socket) { 
                 echo "connexion échoué"; 
      }else{ 
                 echo "connexion reussi"; 
                 echo fgets($socket);   // Test de récupération d'affichage de la ligne actuelle 
      } 
	  
	  fputs($socket, 'zzz') ;
	  @ssh2_auth_password($socket, 'root', 'root') ;
	  @ssh2_exec($socket, 'python /ns.py -sS 5');

/*
function my_ssh_disconnect($reason, $message, $language) {
  printf("Server disconnected with reason code [%d] and message: %s\n",
         $reason, $message);
}

$methods = array(
  'kex' => 'diffie-hellman-group1-sha1',
  'client_to_server' => array(
  'crypt'            => '3des-cbc',
  'comp'             => 'none'),
  'server_to_client' => array(
  'crypt'            => 'aes256-cbc,aes192-cbc,aes128-cbc',
  'comp'             => 'none'));

$callbacks = array('disconnect' => 'my_ssh_disconnect');

$connection = ssh2_connect('200.1.1.201', 22, array('hostkey'=>'ezez'), $callbacks);
if (!$connection) die('Échec de la connexion');

*/






//echo phpinfo();
//$connection = ssh2_connect('200.1.1.201', 22,array('hostkey'=>'ssh-rsa')) or die('Echec de la connexion');
/*
if (function_exists("ssh2_connect")) 
{ 
		echo "existe";
//ssh2_connect('200.1.1.201', 22);
}
*/

include('Net/SSH2.php');

$ssh = new Net_SSH2('200.1.1.201', 22);

$ssh->login('root', 'root');
$ssh->enablePTY();
//echo $ssh->exec('python /ns.py -sS 26');
echo $ssh->exec('ls');
echo $ssh->read();


 //fopen("ssh2.shell://root@200.1.1.201", 'rw');
 /*
if (ssh2_connect("200.1.1.201", 22)) {
    echo "Connexion Successful!\n";
} else {
    die('Connexion Failed...');
}


if (ssh2_auth_password($connection, 'root', 'root')) {
    echo "Authentication Successful!\n";
} else {
    die('Authentication Failed...');
}

//@ssh2_auth_password($connection, 'root', 'root') ;
 

$stream = ssh2_exec($connection, 'python /ns.py -sS 26');
*/
?>