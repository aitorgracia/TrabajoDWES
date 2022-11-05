<?php
    if(isset($_POST) && !empty($_POST) && strlen($_POST['nombre']) >= 3)
    {
        $nombre = "Hola ".$_POST['nombre'];
        form('','',$nombre);
    }
    else if(isset($_POST['nombre']) && !empty($_POST['nombre']) && strlen($_POST['nombre']) < 3)
    {
        $nombre = $_POST['nombre'];
        form('El nombre debe de ser mayor a 3 digitos',$nombre,'');
    }  
    else
    {
        form('Introduce un nombre: ','','');
    }

    /*Esta funcion sirve para imprimir el formulario de manera mas facil y sin tener que replicarlo en cada una de las condiciones del programa, 
    cada uno de los datos que se insertan sirve para modificar mostrar información en una parte del formulario, de manera en que según que se le 
    tenga que informar al usuario se inserte informacion en cada uno de los parámetros de la función.

    El parametro $info1 modifica el h3, lo he usado para dar la bienvenida al usuario o para
    hacerle saber que el nombre ha de ser mayor de tres carácteres. $info2 lo he usado para modificar el valor del imput del nombre, ahí
    he vuelto a mostrar el nombre menor a tres carácteres que el usuario ha introducido. Por último, $info3 lo he usado para mostrar el nombre
    introducido en el formulario mediante el método POST */

    function form ($info1,$info2,$info3)
    {
        echo'<body>
        <h2>Formulario</h2>'.
        "<h3>$info1</h3>".
        '<form method="post" action="">
            <label for="nombre">Nombre: </label>
            <input type="text" value="'.$info2. '" name="nombre" required> <br>
            <input type="submit" value="enviar">
        </form>'.

        "<hr><h2>Datos recibidos</h2>
        <p>$info3</p>
        </body>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio13</title>
    </head>
</html>
           