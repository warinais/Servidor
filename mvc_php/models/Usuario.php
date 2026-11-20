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

}