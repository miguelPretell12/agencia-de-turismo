<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $btnAccion = $_POST['btnAccion'];

    switch($btnAccion){
        case "agregar":
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $descuento = $_POST['descuento'];

            if(!isset($_SESSION['carrito'])){
                $producto = array("id"=>$id,"nombre"=>$nombre,
                "precio"=>$precio,"cantidad"=>$cantidad,"descuento"=>$descuento);
                $_SESSION['carrito'][0]=$producto;
            }else {
                $idProducto = array_column($_SESSION['carrito'],"id");
                if(in_array($id,$idProducto)){
            
                    foreach($_SESSION['carrito'] as $indice=>$producto){
                        $subcantidad = $producto['cantidad'] + $cantidad;
                    }
                    $_SESSION['carrito'][$indice]['cantidad'] = $subcantidad;
                }else {
                    $numeroProducto = count($_SESSION['carrito']);
                    $producto = array("id"=>$id,"nombre"=>$nombre,
                    "precio"=>$precio,"cantidad"=>$cantidad,"descuento"=>$descuento);

                    $_SESSION['carrito'][$numeroProducto]=$producto;
                }
                
            }
            header("location: /carrito.php");  
        break;

        case "eliminar":
            $id = $_POST['id'];
            foreach($_SESSION['carrito'] as $indice=>$producto){
                if($id == $producto['id']){
                    unset($_SESSION['carrito'][$indice]);
                }
            }
            header("location: /carrito.php");   
        break;
    }
}