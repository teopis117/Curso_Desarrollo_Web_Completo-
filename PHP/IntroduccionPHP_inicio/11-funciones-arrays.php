<?php include 'includes/header.php';

// funciones con arreglos en php

// buscar elementos en un arreglo IN_ARRAY

$carrito=['Tablet','Televison'];

var_dump(in_array('Tablet',$carrito));

//ordenar los elementos en un arreglo


$numero=array(1,2,5,2,6,3,7,3,6,4,4);

sort($numero); //de mayor a menor
rsort(($numero)); //de menor a mayor
echo "<pre>";
var_dump($numero);
echo "<pre>";


// ordenar arreglo asociativo

$cliente=array(
    'saldo'=>200,
    'tipo'=>"premium",
    'nombre'=>"juan",
) ;

echo "<pre>";
var_dump($cliente);
echo "<pre>";
// asort ordena los valores de las propiedades
asort($cliente);

// arsort() ordena al reves

echo "<pre>";
var_dump($cliente);
echo "<pre>";


// ksort() ordena por llaves
ksort($cliente);

echo "<pre>";
var_dump($cliente);
echo "<pre>";

    // krsort() ordena al reves


include 'includes/footer.php';