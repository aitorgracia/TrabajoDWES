<?php
$array1["Base"]= "Stephen Curry";
$array1["Ala-pívot"]= "Lebron James";
$array1["Alero"]= "Klay Thomson";
$array1["Escolta"]= "James Harden";
$array1["Pívot"]= "Giannis Antetokounmpo";

echo"<ul>";

foreach($array1 as $position => $elemento)
{

    echo"<li> $position: $elemento </li>";

}
echo"</ul>";