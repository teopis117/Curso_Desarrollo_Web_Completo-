<?php include 'includes/header.php';

$productos=[
    [
        'nombre'=>"tablet",
        'precio'=>200,
        'disponible'=> true,
    ],
    [
        'nombre'=>"Television",
        'precio'=>300,
        'disponible'=> true,
    ],
    [
        'nombre'=>"Producto",
        'precio'=>400,
        'disponible'=> false,
    ]
];

echo "<pre>";
var_dump($productos);
echo "<pre>";

// de esta manera podemos  mostrarlo con js
// json_encode() convierte un arreglo a un script
$json=json_encode($productos);
// de esta manera podemos utilizar los asentos
var_dump($json,JSON_UNESCAPED_UNICODE);

// json_decode() convierte  de un script  a un arrreglo
$json_array=json_decode($json);
var_dump($json_array);

include 'includes/footer.php';