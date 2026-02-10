<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';



try{

$conn = new PDO("mysql:host = $host",$user,$pass);
$sql = "CREATE DATABASE bunatest";
$conn->exec($sql);
echo "Connected";
echo "database created";

}catch(Exception $e){
  echo "Not conected";
}




?>