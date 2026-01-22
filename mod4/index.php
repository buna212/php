<?php

//phpinfo();

$x = "hello";
$z = 10.3;
$y = 5 ;

print_r($x);

echo gettype ($x);
echo gettype ($z);
echo gettype ($y);

function printV() {
    echo "this is php ".phpversion();
}

printV();


function maximum($x ,$y){
 if ($x>$y){
    return $x;
 }else{
    return $y;
 }

}
$test = maximum (100,101);
echo $test;



?>