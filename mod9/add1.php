<?php
include_once('config.php');

if(isser($_POST 9['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,password) values (:username,:password)";
    $sqlQuery = $conn -> prepare($sql);

     $sqlQuery -> bindParam(':username', $username);
      $sqlQuery -> bindParam(':password', $password);


}
?>