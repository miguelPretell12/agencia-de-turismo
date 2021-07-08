<?php

namespace App;

class ActiveRecord {
    //Base de datos
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla='';

    protected static $errores = [];

    //Definir la conexion a la DB
    public static function setDB($database){
        self::$db = $database;
    }

    //Validacion de errores 
    public static function getErrores(){
        static::$errores = [];
        return static::$errores;
    }

    public function atributos(){
        $atributos =[];

        foreach(static::$columnasDB as $columna){
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarAtributos(){
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value);
        }

        return $sanitizado;
    }

    public function crear(){
        //Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        $string = join(',',array_keys($atributos));
        $string1 = join("','",array_values($atributos));

        $query = "insert into ".static::$tabla."($string) values('$string1')";
        $resultado =  self::$db->query($query);
        return $resultado;
    }

    public function borrarImagen(){
        //Comprobar si la imagen existe en el archivo
        $existe = file_exists(CARPETA_IMAGENES.$this->imagen);
        if($existe){
            unlink(CARPETA_IMAGENES.$this->imagen);
        }
    }

    public function setImagen($imagen){
        //Eliminar la imagen previa
        if(!is_null($this->id)){
            $this->borrarImagen();
        }
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    protected static function crearObjeto($registro){
        $objeto = new static;

        foreach($registro as $key=>$value){
            if(property_exists($objeto,$key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }

    protected static function consultarSql($query){
        $resultado = self::$db->query($query);

        $array = [];

        while($registro = $resultado->fetch_assoc()){
            $array[] = static::crearObjeto($registro);
        }

        $resultado->free();

        return $array;
    }   

    public static function all(){
        $query = "SELECT * FROM ".static::$tabla;
        $resultado = static::consultarSql($query);
        return $resultado;
    }

    public static function all3(){
        $query = "SELECT * FROM ".static::$tabla." limit 3";
        $resultado = static::consultarSql($query);
        return $resultado;
    }

    public static function find($id){
        $query = "SELECT * FROM ".static::$tabla." WHERE id= ${id}";
        $resultado = static::consultarSql($query);
        return array_shift($resultado);
    }

    public function sincronizar($args = []){
        foreach($args as $key => $value){
            if(property_exists($this,$key) && !is_null($value)){
                $this->$key = $value;
            }
        }
    }

    public function actualizar(){
        //sanitizar los datos
        $atributos = $this->sanitizarAtributos();
        $valores = [];

        foreach($atributos as $key => $value){
            $valores[] = "{$key}='{$value}'";
        }

        $query = "UPDATE ".static::$tabla." SET ";
        $query .= join(' , ', $valores);
        $query .= "WHERE id='".self::$db->escape_string($this->id)."'";
        $query.= " LIMIT 1";

        $resultado = self::$db->query($query);

        return $resultado;
    }

    public function eliminar(){
        $query = "DELETE FROM ".static::$tabla." WHERE id= ".self::$db->escape_string($this->id)." LIMIT 1";
        $resultado = self::$db->query($query);
        return $resultado;
    }

}
