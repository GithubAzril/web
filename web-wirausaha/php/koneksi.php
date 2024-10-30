<?php

$host = "localhost";
$user = "root";
$pass = "";
$db  = "wirausaha";

$conn = new mysqli($host, $user, $pass, $db);

try {
  $pdo = new PDO("mysql:host=$host;wirausaha=$db", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
