<?php 
    $host = 'localhost';
    $db = "buna";
    $user = 'root';
    $pass = '';


    try{


        $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $pass);

$username = "Zani";

$password = password_hash("mypassword" , PASSWORD_DEFAULT);
   
$sql = "INSERT INTO user(username , "password") VALUES ('$username' , '$password');


        $conn->exec($sql);



        echo "TABLE CREATED";


    }catch(Exeption $e){


        echo "TABLE NOT CREATED";


    }


?>
