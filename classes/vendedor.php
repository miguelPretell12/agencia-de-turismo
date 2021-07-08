<?php

namespace App; 

class Vendedor extends ActiveRecord {
    protected static $tabla = 'vendedores';
    protected static $columnasDB =['id','nombre','apellido','telefono','correo','usuario','contrasena','imagen'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $correo;
    public $usuario;
    public $contrasena;
    public $imagen;

    //constructor
    public function __construct($args= []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->usuario = $args['usuario'] ?? '';
        $this->contrasena = $args['contrasena'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[]="El nombre es obligatorio";
        }
        if(!$this->apellido){
            self::$errores[]="El apellido es obligatorio";
        }

        if(!$this->telefono){
            self::$errores[]="El telefono es obligatorio";
        }

        if(!$this->correo){
            self::$errores[]="El correo es obligatorio";
        }

        if(!$this->contrasena){
            self::$errores[]="Contraseña es obligatorio";
        }

        if(!$this->imagen){
            self::$errores[] = "La imagen de la propiedad es Obligatoria";
        }
        return self::$errores;
    }

    public function validarLogin(){
        if(!$this->correo){
            self::$errores[]="El correo es obligatorio";
        }

        if(!$this->contrasena){
            self::$errores[]="Contraseña es obligatorio";
        }
    }

    public function existeUsuario(){
        $query = "SELECT * FROM ".self::$tabla." WHERE usuario= '".$this->usuario."' LIMIT 1";
        $resultado = self::$db->query($query);
        if(!$resultado->num_rows){
            self::$errores[] = "El usuario no existe";
            return;
        }

        return $resultado;
    }

    public function comprobarPassword($resultado){
        $vendedor = $resultado->fetch_object();
        $autenticado =$this->contrasena === $vendedor->contrasena? true: false;
        if(!$autenticado){
            self::$errores[] = 'El password es Incorrecto';
            return;
        }

        return $autenticado;
    }

    public function autenticar(){
        session_start();
        $query = "SELECT * FROM ".self::$tabla." WHERE usuario= '".$this->usuario."' LIMIT 1";
        $resultado = self::$db->query($query);
        $vendedor = $resultado->fetch_object();

        $_SESSION['usuario']= $this->usuario;
        $_SESSION['id'] = $vendedor->id;
        $_SESSION['login'] = true;

        //Llenar el arreglo de session
        header("location: /admin.php");
    }
}