<?php include 'includes/header.php';

//foreach

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
foreach($productos as $producto)
{?>
<!-- generar codigo desde el navegador y no desde php
 -->

<li>
    <p>Producto:<?php  echo $producto["nombre"];?></p>
    <p>Precio:<?php echo "$".$producto["precio"];   ?></p>
    <!-- operador ternario -->
    <p><?php  echo ($producto["disponible"]) ? 'disponible':'no disponible' ?></p>
    
</li>



    <?php

    echo "<pre>";
    var_dump($producto);
    echo "<pre>";

}


// count($arreglo) extension del arreglo
// sizeof($arreglo)  tamaño de nuestro arreglo

include 'includes/footer.php';