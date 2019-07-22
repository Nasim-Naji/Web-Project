<?php
$host = 'localhost';
$dbname = 'universitydb';
$user = 'root';
$pass = 'root';
$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
try {
# MySQL with PDO_MYSQL
  $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?>
