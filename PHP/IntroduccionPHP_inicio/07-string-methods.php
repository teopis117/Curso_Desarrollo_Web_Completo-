<?php include 'includes/header.php';
$nombre="Jose Eduardo";

// conocer el tamaño de la palabra
echo strlen($nombre);
var_dump($nombre);

// eliminar el espacio en blanco
$texto= trim($nombre);
echo $texto;

// convertiramayusuculas
echo strtoupper($nombre);

// convertir a minusculas

echo strtolower($nombre);

$email1="correo1correo.com";
$email2="Correo1correo.com";
 
// remplazar una cadena de texto
    // str_replace("palabra","remplzao",variableaguardar)
echo str_replace('Jose','X',$nombre);


// revisar si una string existe o no
// y nos retorna la posicion
echo strpos($nombre,"Jose");


$tipoCliente="Premium";

// concatenar strings
echo "El Cliente ".$nombre . "Es" . $tipoCliente;
echo "el cliinte {$nombre} es {$tipoCliente}";
include 'includes/footer.php';