<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejercicio16</title>
</head>
    <body>
        <h2>Formulario</h2>
        <form method="post" action="">
            <input type="text" value="" name="nombres[]"> <br>
            <input type="submit" value="enviar">
        </form>
        
        <h2>Datos recibidos</h2>
        <?php
        if(isset($_POST['nombres'])){

            foreach($_POST['nombres'] as $nombre)
            {
                echo('<input type="hidden" name="nombres[]" value="'.$nombre.'">');
                echo('<ul><li>'.$nombre.'</li></ul>');
            }

        }
        else {
            echo ("No se ha enviado nada");
        }
        ?>
    </body>
</html>