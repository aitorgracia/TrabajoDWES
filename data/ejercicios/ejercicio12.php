<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio12</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre: </label><input type="text" value="" name="nombre" required> <br>
        <input type="submit" value="enviar">
    </form>
    
    <h2>Datos recibidos</h2>
    <?php
    if(isset($_POST) && !empty($_POST)){

        echo "Nombre:  ".$_POST["nombre"];
    }
     else {
         echo "No se ha enviado nada";
    }
    ?>
</body></html>