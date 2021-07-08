<?php

namespace App;

class DetalleVenta extends ActiveRecord {
    protected static $columnasDB =
    ['id','idVenta','nombreProducto','precioUnitario','cantidad','descuento'];
    protected static $tabla = "tbldetalleventa";

    public $id;
    public $idVenta;
    public $nombreProducto;
    public $precioUnitario;
    public $cantidad;
    public $descuento;

    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->nombreProducto = $args['nombreProducto'] ?? null;
        $this->precioUnitario = $args['precioUnitario'] ?? null;
        $this->cantidad = $args['cantidad'] ?? null;
    }
}
