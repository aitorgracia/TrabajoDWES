<?php

const numero = 256;

for($i = 1;$i <= numero; $i++)
{
    if(numero % $i == 0)
    {
        echo $i.'<br>';
    }
}