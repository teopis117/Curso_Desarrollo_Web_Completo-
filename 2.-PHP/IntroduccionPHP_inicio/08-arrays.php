<?php include 'includes/header.php';

$carrito=["tabllet","television","computadora"];


// agregar un elemento al final
$carrito[3]="nuevo producto";

// agregar un elemento al final
array_push($carrito,"audifonos");

// agregar al inicio
array_unshift($carrito,"smartwatch");






//util para ver los contenidos  de un array
echo "<pre>";
var_dump($carrito);

echo "<pre>";

// acceder a un elemento del array
echo $carrito[1];


$carrtio2=array("cliente1","cliente2","cliente33");

echo "<pre>";
var_dump($carrtio2);
echo "<pre>";








include 'includes/footer.php';