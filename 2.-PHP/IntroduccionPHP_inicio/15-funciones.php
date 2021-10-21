<?php include 
// declare(strict_types=1);
include 'includes/header.php';

// php es un lenguaje tipado asegurandose que utilizemos los tipos de datos correctos
function sumar(int $numero1=0,int $numero2=0)
{
    echo $numero1+$numero2;
    echo "<br>";
}

// podemos colocar el parametro nombrado para colocarlo de diferentes maneras
sumar(numero2:10,numero1:20);


include 'includes/footer.php';