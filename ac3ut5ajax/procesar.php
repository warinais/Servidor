php

<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = trim($_POST['nombre']);
    if($nombre === ''){
        echo "<p style='color: red;'>El nombre es obligatorio.</p>";
    } else {
        echo "<p style='color: green;'>Hola, " . htmlspecialchars($nombre) . "!</p>";
    }
}
?>
