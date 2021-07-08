<?php 

function conectarDB(){
    $db = new mysqli('localhost','root','','turismo');
    if(!$db){
        echo 'Conexion no establecida';
    }
    return $db;
}