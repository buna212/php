<?php

include_once('config.php');

$sql = "SELECT * FROM  product";

$getProducts = $conn->prepare($sql);

$getProducts -> execute();

$products = $getProduct->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }

        td, th{
            padding: 15px;
        }

        th{
            background-color: pink;
        }

        
    </style>
</head>
<body>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
    </tr>



    <?php
        foreach($products as $product){ ?>
            <tr>
            <td><?= $product['id']; ?></td>
            <td><?= $product['Name']; ?></td>
            <td><?= $product['Price']; ?></td>
            <td><?= $product['Description']; ?></td>
            <td><?= "<a href='delete.php?id=$product[id]'>Delete</a>"?></td>
            <td><?= "<a href='update.php?id=$product[id]'>Update</a>"?></td>
            </tr>
        <?php } ?>
</table>
</body>
</html>