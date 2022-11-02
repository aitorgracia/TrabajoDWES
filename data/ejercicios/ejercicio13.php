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
            echo('<body>
            <h2>Formulario</h2>
            <form method="post" action="">
                <label for="nombre">Nombre: </label>
                <input type="text" value="" name="nombre" required> <br>
                <input type="submit" value="enviar">
            </form>

            <h2>Datos recibidos</h2>
            </body>');
        }
   