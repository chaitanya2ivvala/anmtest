<?php
include 'config.php';
   if( $_GET["ip"] && $_GET["port"] && $_GET["community"] ) {
       $ip = $_GET['ip'];
       $port = $_GET['port'];
       $comm= $_GET['community'];
      echo "OK";

   

   $sql =<<<EOF
      
      INSERT INTO snmpmanager (ip,port,community)
      VALUES ("$ip",$port,"$comm");
EOF;

   $q = $db->exec($sql);
   
   $db->close();
   }

    else{
     echo "FALSE" ;
 }
?>
