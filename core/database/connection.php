<?php
// useless connection before i try to use class 

$servername = "172.93.105.132";
$db_name="db_los_angos_dc";
$username = "root";
$password = "dIpG01c_*ssaB0ai0A+EckjzzMGf@b9A75C1E@#Az";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
