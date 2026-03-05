<?php

include_once("config.php");

 $sql = "SELECT * FROM users";

 $getUsers = $conn -> prepare($sql);

$getUsers -> execute ();

$users = $getUsers ->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hi</title>
    <style>

    table , td ,th {
        border : 1px solid black;
    }

    td , th {
        padding : 15px;
    }

   th{
    background-color : pink;
   }

   <form>inout{
    margin : 10px;
    font-size :20;
    padding :5px;
   }
   button{
    border : 1px;
    padding : 10px 30px;
    font-size :1;
   }


    </style>
</head>
<body>
     <table>
<tr>
 <th>ID </th>
  <th> USERNAME </th>
     <th>  PASWORD </th>
</tr>
<?php 

foreach ($users as $user) { ?>
 <tr>
   <td><?php echo $user ['id'];?></td>

   <td><?php echo $user ['username'];?></td>
   
   <td><?php echo $user ['password'];?></td>

   <td><?="<a href='delete.php?id=$user[id]'>DELETE</a>"?></td>
</tr>
<?php } ?>



</table>
        <form>
        <input type="hidden" name="id" value="<?php echo users[$id]?>"<br>
        <input type="hidden" name="id" value ="<?php echo users[$username]?>"<br>
        <input type="hidden" name:"id" value :"<?php echo users[$id]?>"<br>
        <input type="hidden" name:"id" value :"<?php echo users[$id]?>"<br>


</form>






</body>
</html>