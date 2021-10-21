<?php include 'includes/header.php';

// areglos asociativos son lo equivalente a un objeto en js,accdemos por medio de propiedades


$cliente= 
[
    'nombre'=> "jose",
    'saldo'=> 200,
    "informacion"=> 
    [
        "tipo"=>"premium",    
    ]
    ];

    echo "<pre>";
    var_dump($cliente["nombre"]);
    
    var_dump($cliente["informacion"]["tipo"]);
    echo "<pre>";

    $cliente['codigo']=123123;

    echo "<pre>";var_dump($cliente["codigo"]);
    echo "<pre>";


// la diferncia entre acceder entre js y php es como accedemos por medio de punto y de corchetes


include 'includes/footer.php';