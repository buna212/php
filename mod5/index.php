<?php


$doggy = array (
       array ("Chihuahua" , "England" , 10),
       array ("Golden Retriver" , "America" , 16),
       array ("Huskey", "Siberia" ,  15)

);

echo $doggy [0][0]. "Origin" .$doggy [0][1]. "age" .$doggy[0][2] ."<hr>";
echo $doggy [1][0]. "Origin" .$doggy [1][1]. "age" .$doggy[1][2] ."<hr>";
echo $doggy [2][0]. "Origin" .$doggy [2][1]. "age" .$doggy[2][2]. "<hr>";

for ($x = 0; $x<3; $x++){
    echo "<ul>";
    for ($y = 0 ; $y<3; $y++){
        echo "<li>".$doggy[$x][$y]. "</li>";
    }
    echo "</ul>";
}
?>




<!DOCTYPE html>
<table>
    <tr>
         <th>Phone</th>
         <th>In stock</th>
         <th>Sold</th>
    </tr>

<style> 
        table{
            width : 500;
        }

        th , td{
            padding : 10px;
            text-align : center;
            border : 1px solid black;
        }

        th {
            background-color:aquamarine;
            font-weight: bold;
        }
        </style>
      <?php 
      $phones = array (
        array("iPhone17" , 20 , 5),
        array("iPhone15" , 15 , 15),
        array("iPhone16" , 10 , 8),
        array("iPhone13" , 5 , 5),
      );

      for ($row = 0; $row<4; $row++){
        echo "<tr>";
        for ($col  = 0; $col<3; $col++){
            echo "<td>" .$phones[$row][$col]. '</td>';
        }
        echo "</tr>";
      }
      echo "</table>";

?>

</html>


<?php

$arianita = [
    "Math" =>"3",
    "art" => "5",
    "histori" => "4",
    "music" => "2"
];

echo "Arianitas math  grade is ".$arianita ['Math'];

?>