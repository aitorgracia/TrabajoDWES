<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio11</title>
    </head>
    <body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Título del libro: </label><input type="text" value="" name="titlib"> <br>
        <label>Autor del libro: </label><input type="text" value="" name="autlib"> <br>
        <label>Editorial: </label><input type="text" value="" name="edilib"> <br>
        <label>Páginas: </label><input type="text" value="" name="paglib"> <br>
        <input type="submit" value="enviar">
    </form>
    <h2>Datos del libro</h2>
    <?php
        if(isset($_POST) && !empty($_POST)){

            echo "Nombre del libro:  ".$_POST["titlib"];
            echo "<br>Autor del libro:  ".$_POST["autlib"];
            echo "<br>Editorial del libro:  ".$_POST["edilib"];
            echo "<br>Numero de páginas:  ".$_POST["paglib"];
        }
        else {
            echo "No se ha enviado nada";
        }
    ?>
    </body>
</html>