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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio7</title>
    </head>
</html>
