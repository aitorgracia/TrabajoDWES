<?php

$array1 = ["Alemania","Italia", "Portugal", "España",];

echo"Manera 1: ";
var_dump($array1);


echo"<br><br>Manera 2: ";
print_r($array1);

echo"<br><br>Manera 3: ";

foreach($array1 as $numero)
{

    echo"$numero  ";

}
