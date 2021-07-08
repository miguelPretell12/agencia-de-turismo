<?php

namespace App;

class Usuario extends ActiveRecord {
    protected static $columnasDB = ['id','nombre','apellido','dni','email','direccion'];
    protected static $tabla= 'usuarios';

    public $id;
    public $nombre;
    public $apellido;
    public $dni;
    public $email;
    public $direccion;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? null;
        $this->apellido = $args['apellido'] ?? null;
        $this->dni = $args['dni'] ?? null;
        $this->email = $args['email'] ?? null;
        $this->direccion = $args['direccion'] ?? null;
    }

    public function getErroresForm(){
        if(!$this->nombre){
            self::$errores[] = "Nombre obligatorio"; 
        }
        if(!$this->apellido){
            self::$errores[] = "Apellido obligatorio";
        }
        if(!$this->dni){
            self::$errores[] = "D.N.I obligatorio";
        }
        if(!$this->email){
            self::$errores[] = "E-mail obigatorio"; 
        }
        if(!$this->direccion){
            self::$errores[] = "Direccion obligatorio";
        }

        return self::$errores;
    }

}