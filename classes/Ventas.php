<?php

namespace App;

class Ventas extends ActiveRecord {
    protected static $columnasDB=
    ['id','ClaveTransaccion','PaypalDatos','fecha','correo','total','status'];

    protected static $tabla= "tblventa";

    public $id;
    public $ClaveTransaccion;
    public $PaypalDatos;
    public $fecha;
    public $correo;
    public $total;
    public $status;
}
