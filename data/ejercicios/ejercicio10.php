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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio10</title>
    </head>
</html>