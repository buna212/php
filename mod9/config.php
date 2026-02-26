<?php 
    $host = 'localhost';
    $db = "buna";
    $user = 'root';
    $pass = '';


    try{
        $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $pass);
    }catch(Exeption $e){
        echo "something went wrong";
    }

