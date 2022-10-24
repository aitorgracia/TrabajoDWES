<?php

$array1[]= "Stephen Curry";
$array1[]= "Lebron James";
$array1[]= "Klay Thomson";
$array1[]= "James Harden";
$array1[]= "Giannis Antetokounmpo";

foreach($array1 as $position => $elemento)
{

    echo'<li>',1+$position.' '.$elemento.'</li>';

}
echo'</ul>';