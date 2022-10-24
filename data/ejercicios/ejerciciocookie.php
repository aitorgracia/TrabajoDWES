<?php

setcookie("cookie",$_POST["preferencias[]"],time()+600)



if(isset($_POST) && !empty($_POST)){

    echo 'Nombre del libro:  '.$_POST["titlib"];
    echo '<br>Autor del libro:  '.$_POST["autlib"];
    echo '<br>Editorial del libro:  '.$_POST["edilib"];
    echo '<br>Numero de páginas:  '.$_POST["paglib"];
}
 else {
     echo "No se ha enviado nada";
}