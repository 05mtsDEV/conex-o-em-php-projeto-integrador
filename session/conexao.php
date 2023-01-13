<?php
 
$host = "localhost";
$user = "root";
$pass = "";
$bd = "db_senhas";
 
$mysqli = new mysqli($host, $user, $pass, $bd);
 
/* check connection */
if ($mysqli->connect_errno) {
   echo "Connect failed: " . $mysqli->connect_error;
   exit();
}
?>
