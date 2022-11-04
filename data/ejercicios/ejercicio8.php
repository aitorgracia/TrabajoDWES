<?php

$array1[]= "Stephen Curry";
$array1[]= "Lebron James";
$array1[]= "Klay Thomson";
$array1[]= "James Harden";
$array1[]= "Giannis Antetokounmpo";

echo"<ul>";

foreach($array1 as $elemento)
{

    echo"<li> $elemento </li>";

}
echo'</ul>';

echo"<ul>";

foreach($array1 as $position => $elemento)
{

    echo"<li>$position $elemento</li>";

}
echo"</ul>";