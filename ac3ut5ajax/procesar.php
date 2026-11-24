php

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $telefono = trim($_POST['telefono']);
    if($telefono === ''){
        echo "<p style='color: red;'>El número es obligatorio.</p>";
    } else {
        echo "<p style='color: green;'>Hola, el número de teléfono introducido es: " . htmlspecialchars($telefono) . "!</p>";
    }
}
?>
