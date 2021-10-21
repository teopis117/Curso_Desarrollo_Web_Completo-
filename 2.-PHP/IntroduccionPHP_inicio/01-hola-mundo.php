<php? include 'includes/header.php';
<!-- con esto le decimos que comenzara nuestro codigo php -->
<?php

// echo no es un funcion pero nos sirve para imprimir 
echo "hola mundo";

// no es muy recomendado insertar html por medio de php
echo "<br/>";

echo("hola mundo");

print("hola mundo");

print_r("hola mundo");

// var_dump no sirve para mostrar y conocer el tamaño de la variable
var_dump("hola mundo");
include 'includes/footer.php';

// es recomendado nunca cerrar las etiquetasde php

