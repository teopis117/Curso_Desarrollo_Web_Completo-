<?php

use JetBrains\PhpStorm\ArrayShape;

function obtenereServicios():array
{
    // try sirve para puntos criticos de la funcion
    try{
        // codigo
        // importar una conexion
        require 'database.php';
        

        //escribir el codigo sql

        // de esta manera podremos escribir las  lineas de mysql
        $sql="SELECT * FROM servicios;";
        
                // nos permite consultar una base de datos en php
                        
        $consulta=mysqli_query($db,$sql);
        

        // obtener los resultados
      
        // leemos los resultados con assoc
        // mysqli_fetch_assoc()---de manera asociativo

        // arreglo vacio
        $servicios=[];

       $i=0;
        while($row=mysqli_fetch_assoc($consulta))
        {
            $servicios[$i]['id'] = $row["id"];
            $servicios[$i]['precio']= $row["precio"];
            // $servicios[$i]['nombre'] = $row['nombre'];
            $i++;
        }
       
        
        return $servicios;




    }
    catch(\Throwable $th)
    {
            var_dump($th);
    }
}

obtenereServicios();