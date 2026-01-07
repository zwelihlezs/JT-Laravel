<?php
//list cars and their quantity

$cars = ["bmw" => 2, "vw"=> 1, "toyota" => 4, "ford" => 1, "audi" => 3];


foreach($cars as $car => $num){
    echo"\n# $car: $num\n"; 
}

?>