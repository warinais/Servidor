<?php

// Paso de parámetros por valor

function duplicaValor($numDuplica) {
    $numDuplica = $numDuplica * 2;
    echo "El valor del número duplicado es: " . $numDuplica . "<br>";
}

$numero = 4;

echo "El valor del número antes de llamar a la función por valor es: " . $numero . "<br>";

duplicaValor($numero);

echo "El valor del número después de llamar a la función por valor es: " . $numero . "<br>";


// Paso de parámetros por referencia

echo "El valor del número antes de llamar a la función por referencia es: " . $numero . "<br>";

function triplicaValor(&$numTriplica) {
    $numTriplica = $numTriplica * 3;
    echo "El valor del número triplicado es: " . $numTriplica . "<br>";
}

triplicaValor($numero);

echo "El valor del número después de llamar a la función por referencia es: " . $numero . "<br>";


//try - catch, error_log

function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("El divisor no puede ser cero.");
    }
    return $a / $b;
}

try{
    echo divide(8, 0);
}catch(Exception $e){
    error_log("Error encontrado: " . $e->getMessage());
    echo "Ha saltado un error: ";
    echo $e->getMessage();
}

echo "<br> Este programa continúa ejecutándose";

?>