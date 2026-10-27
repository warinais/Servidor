<?php

// Ejemplo de if y switch

$fruta = "Manzana";
if ($fruta == true) {
    switch ($fruta) {
        case "Manzana":
            echo "Es una manzana.";
            break;
        case "Plátano":
            echo "Es una plátano.";
            break;
        case "Naranja":
            echo "Es una naranja.";
            break;
        default:
            echo "No se que fruta es.";
    }
} else {
    echo "No hay fruta alguna.";
}

echo "<br>";
echo "<br>";

// While

$num = 0;
while ($num < 5) {
    echo "El número es: $num";
    $num++;
}
echo "<br>";
echo "<br>";

//Do While
$num = 0;
do {
    echo "El número es: $num";
    $num++;
} while ($num < 5);

echo "<br>";
echo "<br>";

//For

for ($i = 0; $i < $num; $i++) {
    echo "El número es: $i";
}

echo "<br>";
echo "<br>";

// Foreach

$productos = ['Leche', 'Huevos', 'Pan', 'Fruta', 'Verduras'];
foreach ($productos as $producto) {
    echo "Producto: $producto <br>";
}
?>