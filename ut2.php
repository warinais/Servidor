<?php

$nombre = "Manzanas"; //Variable String
$precio = 1.85; //Variable Float
$cantidad = 8; //Variable Integer

if ($cantidad > 0) {
    $precioFinal = $precio * $cantidad; //Calculo del precio final
    echo "El precio final de $cantidad $nombre es: " . number_format($precioFinal, 2) . "<br>";
} else {
    echo "No ha comprado nada aún.";
}

?>