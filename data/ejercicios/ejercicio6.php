<?php

$array1 = ["Stephen Curry","Lebron James", "Klay Thomson", "James Harden", "Giannis Antetokounmpo"];
$array2 = array("Stephen Curry","Lebron James", "Klay Thomson", "James Harden", "Giannis Antetokounmpo");

echo'<ul>';

foreach($array1 as $elemento)
{

    echo'<li>'.$elemento.'</li>';

}
echo'</ul>';

echo'<ul>';

foreach($array2 as $position => $elemento)
{

    echo'<li>',1+$position.' '.$elemento.'</li>';

}
echo'</ul>';