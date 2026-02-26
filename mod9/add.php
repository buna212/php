<?php

$username = $_GET ['username'];
$password= $_GET ['password'];
echo $username;
echo "br";
echo $password;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR php FORM</title>
</head>
<body>
<form action="index.php" method="get">
<label for="username"> username </label>
<input type = "text">
<label for="password"> password </label>
<input type = "text">
<input type="Submit" value="Submit">

</body>
</html>