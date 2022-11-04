<?php

$array1[]= "España";
$array1[]= "Portugal";
$array1[]= "italia";
$array1[]= "Alemania";

echo"Manera 1: ";
var_dump($array1);


echo"<br><br>Manera 2: ";
print_r($array1);

echo"<br><br>Manera 3: ";

foreach($array1 as $numero)
{

    echo"$numero  ";

}
