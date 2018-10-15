<?php

class MyDB extends SQLite3 {
      function __construct() {
         $this->open('trap.db');
      }
   }
   
$db = new MyDB();
$stat = <<<EOF
CREATE TABLE IF NOT EXISTS trapdevices(domainname STRING , status integer, newtime varchar, ostatus integer, ortime varchar);
EOF;
$tempdevice = $db->query($stat);
$stat1 =<<<EOF
CREATE TABLE IF NOT EXISTS snmpmanager( ip VARCHAR(20) NOT NULL, port INT NOT NULL, community STRING );
EOF;
$tempmanager = $db->exec($stat1);
?>
