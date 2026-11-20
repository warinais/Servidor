<?php

class Usuario {
    
    //Atributos
    private $usuarios;

    //Constructor
    public function __construct() {

    //Iniciamos algunos usuarios para la actividad
        $this->usuarios = [
            ['id' => 1, 'nombre' => 'Juan', 'telf' => '123456789'],
            ['id' => 2, 'nombre' => 'María', 'telf' => '987654321'],
            ['id' => 3, 'nombre' => 'Pedro', 'telf' => '456789123']
        ];
    }

    //Obtener los usuarios
    public function obtenerUsuarios() {
        return $this->usuarios;
    }

    //Obtener usuario por ID
    public function obtenerUsuarioPorId($id) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario['id'] == $id) {
                return $usuario;
            }
        }
        return null; // Retorna null si no se encuentra el usuario
    }

}