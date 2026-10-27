<?php

// Paso de parámetros por valor

function duplicaValor($numDuplica) {
    $numDuplica = $numDuplica * 2;
    echo "El valor del numero duplicado es: " . $numDuplica . "<br>";
}

$numero = 4;

echo "El valor del numero antes de llamar a la función por valor es: " . $numero . "<br>";

duplicaValor($numero);

echo "El valor del numero después de llamar a la función por valor es: " . $numero . "<br>";


// Paso de parámetros por referencia

echo "El valor del numero antes de llamar a la función por referencia es: " . $numero . "<br>";

function triplicaValor(&$numTriplica) {
    $numTriplica = $numTriplica * 3;
    echo "El valor del numero triplicado es: " . $numTriplica . "<br>";
}

triplicaValor($numero);

echo "El valor del numero después de llamar a la función por referencia es: " . $numero . "<br>";
?>