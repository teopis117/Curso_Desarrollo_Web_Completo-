<?php 

// si el require falla ,es fatal utilizamos cuando tengamos funciones criticas en nuestra aplicacion
require 'includes/header.php'; 

// podemos agregar funciones de otros archivos con los includes y require
require 'funciones.php';
iniciarApp();

// utilizamos includes cuando tengamos que incluir otros templates
// include('includes/header.php');

// echo "Despues del include";




include 'includes/footer.php';