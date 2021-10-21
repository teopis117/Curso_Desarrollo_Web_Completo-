<?php include 'includes/header.php';

$auntenticado=true;
$admin=false;
/*
&& and
|| or



*/

if($auntenticado || $admin)
{
echo "usuario autenticado";
}
else
{
echo "usuario no auntenticado";
}


// if anidados
echo "<br>";

$cliente=[
    "nombre"=>"pepe",
    "saldo"=>0,
    "tipo"=>"premium",
];

if(empty($cliente))
{
    echo "cliente vacio";
}
else
{
    echo "el cliente no esta vacio";
    if($cliente["saldo"]>0)
    {
        echo "el saldo es positivo";
    }
}

//else if

if($cliente["saldo"]>0)
{
    echo "el cliente tiene saldo";
}

else if($cliente['tipo']=='premium')
{

    echo "el cliente es premiun";
}

// switch

$tecnlogia="PHP";

switch($tecnlogia)
{
    case "PHP":
        echo "Es php";
        break;
    case "c++":
        echo "en c++";
        break;      

        default: 
        echo "no es un lenguaje";
        break;


}



include 'includes/footer.php';