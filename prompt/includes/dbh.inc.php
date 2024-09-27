<?php

$dsn = "mysql:host=freesqldatabase.com;dbname=sql12733136";
$dbusername = "sql12733136";
$dbpassword = " id2Nrvf1Pl";
 
try {
     $pdo = new PDO($dsn, $dsnusername, $dsnpassword);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
} catch (PDOException $e) {
      echo"connection failed:" .$e->getMessage()
}