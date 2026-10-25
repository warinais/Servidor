<?php

$nombre = "Manzanas"; //Variable String
$precio = 1.85; //Variable Float
$cantidad = 4; //Variable Integer
$descuento = 0.1;


$cantidad+=3; //Operador de asignacion

$esMasDocena = $cantidad > 12; //Operador de comparacion

if ($cantidad > 0) { //Operador logico
    if($cantidad > 10) { 
        $precioFinal = $precio * $cantidad * (1 - $descuento); //Descuento del 10% Operador Aritmetico
        echo "El precio final de $cantidad $nombre es: " . $precioFinal . "€" . " aplicando descuento";

    }else{
        $precioFinal = $precio * $cantidad; //Calculo del precio final    
        echo "El precio final de $cantidad $nombre es: " . $precioFinal . "€";

    }
} else {
    echo "No ha comprado nada aún.";
}

?>