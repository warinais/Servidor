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


?>