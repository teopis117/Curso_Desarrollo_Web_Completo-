<?php 
declare(strict_types=1);
include 'includes/header.php';


                                    // cuando la funcion no retorne nada colocamos un void
function usuarioAuntenticado(bool $autenticado):?string
{
    if($autenticado)
    {
        return "el usuario esta auntenticado";
    }
    else
    {
         return "no esta auntenbticoad";
    }

    return [];
}

$usuario=usuarioAuntenticado(true);

echo $usuario;



include 'includes/footer.php';