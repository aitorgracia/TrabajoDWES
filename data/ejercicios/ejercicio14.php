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
                    echo"Esa operación es incalculable";
                }
            }
            
        }
        else {
            echo "";
        }


    ?>
</body>
</html>