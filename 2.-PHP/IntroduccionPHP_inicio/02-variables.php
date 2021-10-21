<?php include 'includes/header.php';

// las variables de php comienzan con el signo de dolar
 
$nombre = "jose";

echo $nombre;
// var_dump() nos imprime tambien el tipo de variable
// en php podemos reasignar los valores de las varibles
$nombre="eduardo";

// de esta manera podemos definir una constante
define('constante',"este es el valor de la constante");

var_dump($nombre);

//  para imprimir el valor de la constante ahora lo hacemos pero sin el signo de dolar
echo constante;

const constante2="hola 2";
echo constante2;

$nombreCliente="Pedro";
$nombre_Cliente="pedro";


include 'includes/footer.php';