<?php

const numero = 13;
$primo = true;

for($i = 2;$i < numero; $i++)
{
    if(numero % $i == 0)
    {
        echo $i.'<br>';
        $primo = false;
    }
}
if($primo)
    {
        echo (numero.' es primo.');
    }