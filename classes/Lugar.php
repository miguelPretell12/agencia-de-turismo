<?php 


namespace App;

class Lugar extends ActiveRecord {
    protected static $columnasDB = 
    ['id','nombre','descripcion','departamento','provincia','distrito','imagen','descuento','precio'];
    protected static $tabla = "lugares";

    public $id;
    public $nombre;
    public $descripcion;
    public $direccion;
    public $departamento;
    public $provincia;
    public $distrito;
    public $imagen;
    //Datos de comercio
    public $descuento;
    public $precio;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? null;
        $this->descripcion = $args['descripcion'] ?? null;
        $this->departamento = $args['departamento'] ?? null;
        $this->provincia = $args['provincia'] ?? null;
        $this->distrito = $args['distrito'] ?? null;
        $this->imagen = $args['imagen'] ?? null;
        $this->descuento = $args['descuento'] ?? null;
        $this->precio = $args['precio'] ?? null;
    }

    public function erroresForm(){ 
        if(!$this->nombre){
            self::$errores[] = "el nombre es obligatorio"; 
        }
        if(!$this->descripcion){
            self::$errores[] = "la descripcion es obligatorio"; 
        }
        if(!$this->departamento){
            self::$errores[] = "el departamento es obligatorio"; 
        }
        if(!$this->provincia){
            self::$errores[] = "la provincia es obligatorio"; 
        }
        if(!$this->distrito){
            self::$errores[] = "el distrito es obligatorio"; 
        }
        if(!$this->descuento){
            self::$errores[] = "la cantidad obligatorio"; 
        }
        if(!$this->precio){
            self::$errores[] = "el precio es obligatorio"; 
        }
        if(!$this->imagen){
            self::$errores[] = "la imagen es obligatorio"; 
        }

        return self::$errores;
    }
}