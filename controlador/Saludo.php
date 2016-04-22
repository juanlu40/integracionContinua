<?php
 
$saludo=filter_input(INPUT_GET,"texto",FILTER_SANITIZE_STRING);

require "../vendor/autoload.php";
use integracionContinua\modelo\validador;
$valida=new validador();

if (empty($saludo)){
    $saludo="ejemplo";
}

$contador=$valida->validar($saludo);

if($contador<20){
    require "../vista/plantillaSaludo.php";
}
else{
    require "../vista/plantillaNoSaludo.php";
}