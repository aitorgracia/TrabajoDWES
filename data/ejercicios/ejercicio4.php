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