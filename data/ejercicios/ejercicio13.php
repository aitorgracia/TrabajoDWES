<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio12</title>
    </head>
    <body>
        <h2>Formulario</h2>
        <form method="post" action="">
            <label for="nombre">Nombre: </label>
            <input type="text" value="" name="nombre" required minlength="3"> <br>
            <input type="submit" value="enviar">
        </form>
        
        <h2>Datos recibidos</h2>
        <?php
        if(isset($_POST) && !empty($_POST)){

            echo 'Nombre:  '.$_POST["nombre"];
        }
        else {
            echo "";
        }
        ?>
    </body>
</html>