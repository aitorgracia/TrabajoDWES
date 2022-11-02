<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio14</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero1">Operando 1: </label>
        <input type="number" value="" name="numero1">

        <select name="operacion" id="operacion" >
            <option value="division">÷</option>
            <option value="multiplicacion">*</option>
            <option value="resta">-</option>
            <option value="suma">+</option>
        </select>

        <label for="numero2">Operando 2: </label>
        <input type="number" value="" name="numero2">
    
        <input type="submit" value="enviar">
    </form>
    <?php
         if(isset($_POST) && !empty($_POST)){
            $resultado;
            if($_POST ["operacion"] == "division")
            {
                if($_POST["numero2"] == 0)
                {
                    echo"Esa operación es incalculable<br>";
                }
            }
            
        }
        else {
            echo "";
        }


    ?>
</body>
</html>
<?php
        if(isset($_POST['nombre']) && !empty($_POST['nombre']) && strlen($_POST['nombre']) >= 3)
        {
            $nombre = $_POST['nombre'];


            echo('<body>
                <h2>Formulario</h2>
                <form method="post" action="">
                <label for="nombre">Nombre: </label>
                <input type="text" value=" " name="nombre" required> <br>
                <input type="submit" value="enviar">
                </form>
            
                <h2>Datos recibidos</h2>
                <p> Hola '.$nombre.'</p>
                </body>');
        }
        else if(isset($_POST['nombre']) && !empty($_POST['nombre']) && strlen($_POST['nombre']) < 3)
        {

            $nombre = $_POST['nombre'];

            echo('<body>
                <h2>Formulario</h2>
                <h3>El nombre tiene que tener una longitud mayor a 3</h3>
                <form method="post" action="">
                <label for="nombre">Nombre: </label>
                <input type="text" value="'.$nombre. '" name="nombre" required> <br>
                <input type="submit" value="enviar">
                </form>
            
                <h2>Datos recibidos</h2>
                </body>');


        }  
        else
        {
            echo('<form action="" method="post">
            <label for="numero1">Operando 1: </label>
            <input type="number" value="" name="numero1">
    
            <select name="operacion" id="operacion" >
                <option value="division">÷</option>
                <option value="multiplicacion">*</option>
                <option value="resta">-</option>
                <option value="suma">+</option>
            </select>
    
            <label for="numero2">Operando 2: </label>
            <input type="number" value="" name="numero2">
        
            <input type="submit" value="enviar">
        </form>');
        }
   