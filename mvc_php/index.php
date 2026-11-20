<?php
require_once __DIR__ . '/controllers/UsuarioControlador.php';

$controlador = new UsuarioControlador();
$controlador->obtenerUsuarios();
?>