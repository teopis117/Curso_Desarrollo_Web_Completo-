<?php include 'includes/header.php';

$clientes=[];
$clintes=array();
$clientes3=array('Pedro','Juan','karen');
$cliente1=[
    'nombre'=> 'Juan',
    'saldo'=>200,
];


// empty nos sirve para revisar si un arreglo esta vacio o no 
// si empty retorna true es que esta vacio
var_dump(empty($cliente));
var_dump(empty($clientes));
var_dump(empty($clientes3));

// isset revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump(isset($cliente));
var_dump(isset($cliente4));
// nos permite revisar si una propiedad existe
var_dump(isset($cliente1['nombre']));


include 'includes/footer.php';