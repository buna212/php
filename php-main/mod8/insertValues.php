<?php

try {
    $pdo  = new PDO('mysql:host=localhost; dbname=testbuna', 'root', '');

    $username = "John Doe";

    $password = password_hash("mypassword", PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";

    $pdo 











 ?>