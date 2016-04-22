<?php
 
$saludoRecibido=filter_input(INPUT_GET,"texto",FILTER_SANITIZE_STRING);

require "../vendor/autoload.php";
use integracionContinua\modelo\validador;
$valida=new validador();

$saludo=$valida->setSaludo($saludo);

require "../vista/plantillaSaludo.php";