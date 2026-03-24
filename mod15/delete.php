<?php

include_once('config.php');

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=:id";

$deleteProducts = $conn->prepare($sql);

$deleteProducts->bindParam(':id', $id);

$deleteProducts -> execute();

header('Location:dashboard.php');

?>