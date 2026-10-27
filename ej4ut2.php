<?php

// Paso de parámetros por valor

function duplicaValor($numDuplica) {
    $numDuplica = $numDuplica * 2;
    echo "El valor del numero duplicado es: " . $numDuplica . "<br>";
}

$numero = 4;

echo "El valor del numero antes de llamar a la función es: " . $numero . "<br>";

duplicaValor($numero);

echo "El valor del numero después de llamar a la función es: " . $numero . "<br>";

?>