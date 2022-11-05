<?php

    const numero = 13;
    $primo = true;

    for($i = 2;$i < numero; $i++)
    {
        if(numero % $i == 0)
        {
            echo "$i <br>";
            $primo = false;
        }
    }
    if($primo)
    {
        echo numero." es primo.";
    }
    else
    {
        echo numero." no es primo";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio5</title>
    </head>
</html>