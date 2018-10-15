<?php
include('config.php');

   $result = $db->exec($tempdevice);
   if(!$result){
       $db->lastErrorMsg();
   } 
 
   $query = "SELECT * FROM trapdevices";
   $ret = $db->query($query);


while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      		echo   $row['domainname']." | ".$row['status']." | ".$row['newtime']." | ".$row['ostatus']." | ".$row['ortime']."\n";
     }

if($ret->fetchArray(SQLITE3_ASSOC) == 0){
      echo "FALSE";
   }


   $db->close();
?>

