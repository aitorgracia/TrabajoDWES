<?php
    $suma;
    $term1 = 0;
    $term2 = 1;

    echo "$term1 <br> $term2 <br>";
    for($i = 0;$i < 8;$i++)
    {
        $suma = $term1 + $term2;
        echo "$suma <br>";
        $term1 = $term2;
        $term2 = $suma;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio4</title>
    </head>
</html>