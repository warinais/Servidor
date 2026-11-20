<?php

require_once __DIR__ . '/../models/Usuario.php';

class UsuarioControlador {

    //Atributos
    private $usuarioModelo;

    //Constructor
    public function __construct() {
        $this->usuarioModelo = new Usuario();
    }

    // Método para obtener todos los usuarios
    public function obtenerUsuarios() {
        $usuarios = $this->usuarioModelo->obtenerUsuarios();

        //Cargar la vista
        require __DIR__ . '/../views/usuarios.php';
        }

}