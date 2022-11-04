<?php

    $nombre = "Aitor";
    $apellidos = "Gracia De Juan";
    $telefono = 722405174;
    $correo = "20aitor02@gmail.com";

echo'<table>
        <tr><td>Nombre</td><td>';print($nombre);echo'</td></tr>
        <tr><td>Apellidos</td><td>';print($apellidos);echo'</td></tr>
        <tr><td>Telefono</td><td>';print($telefono);echo'</td></tr>
        <tr><td>Correo</td><td>';print($correo);echo'</td></tr>
    </table><br><br>';

echo"<table>
        <tr><td>Nombre</td><td>$nombre</td></tr>
        <tr><td>Apellidos</td><td>$apellidos</td></tr>
        <tr><td>Telefono</td><td>$telefono</td></tr>
        <tr><td>Correo</td><td>$correo</td></tr>
    </table>";