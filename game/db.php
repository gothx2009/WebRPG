<?php
  // New mysqli database connection
  $db = new mysqli("localhost", "root", "", "webrpg");
  if($db->connect_error) {
    die($db->connect_error);
  }
  
$i=10;
while ((!($erg=mysql_pconnect("localhost","root","")))&&($i!=0)){$i--;}
if (!$erg) DIE ("Unable to connect to database.");
mysql_select_db("webrpg");
?>
