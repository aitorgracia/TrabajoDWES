<?php
        if(isset($_POST) && !empty($_POST) && $_POST['numero2'] == '0' && $_POST['operacion'] == 'division')
        {
            
            form('Esa operacion es incalculable');
                
        }  
        else if(isset($_POST) && !empty($_POST))
        {

            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            if($_POST['operacion'] == 'suma')
            {
            $operacion = $numero1+$numero2;
            echo"La solucion es: $operacion";
            }
            else if($_POST['operacion'] == 'resta')
            {
            $operacion = $numero1-$numero2;
            echo"La solucion es: $operacion";
            }
            else if($_POST['operacion'] == 'multiplicacion')
            {
            $operacion = $numero1*$numero2;
            echo"La solucion es: $operacion";
            }
            else if($_POST['operacion'] == 'division')
            {
            $operacion = $numero1/$numero2;
            echo"La solucion es: $operacion <br>".
            '<p><a href="ejercicio14.php">Volver</a></p>';
            }
        }
        else
        {
            form('');
        }

        /*Este método tiene la misma función y mismo nombre que la del anterior y los parametros que le introduces tienen exactamente
        el mismo cometido, mas en este caso $info sirve para informar al usuario de que la operación que ha introducido es incalculable,
        en este caso, cualquier número entre cero.*/

function form ($info)
{
    echo('<body>
    <h1>'.$info.'</h1>
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
    </body>');
}
   