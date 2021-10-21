<?php

// con esta funcion nos va a permitir conectarnos a una base de datos
        // le pasaremos varios parametros
$db=mysqli_connect('localhost','root','root','appsalon');

if(!$db)
{
    echo "error en la conexion";
    exit;

}

?>