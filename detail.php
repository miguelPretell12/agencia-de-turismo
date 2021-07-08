<?php

use App\Lugar;

include 'includes/app.php';
$id = $_GET['id'];
$id =filter_var($id, FILTER_VALIDATE_INT);

$lugar = Lugar::find($id);
templates('header');

?>
    <!--Header-->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Lugar turistico</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <div class="flex">
        <div class="flex-descripcion">
            <h2 class="text-center"><?php echo $lugar->nombre ?></h2>
            <div class="descripcion">
                <p> Descripcion: <?php echo $lugar->descripcion ?></p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body"> Lugar donde queda: <?php echo $lugar->departamento.'-'.$lugar->provincia.'-'.$lugar->distrito ?></div>
                    </li>
                    <li class="media">
                        <i class="fas fa-square"></i>
                        <div class="media-body">Precio: <?php echo $lugar->precio ?></div>
                    </li>
                    <?php if($lugar->descuento > 0.00){?>
                    <li class="media">
                        <i class="fas fa-square"></i>
                            <div class="media-body">Descuento de <?php echo $lugar->descuento*100 ?>%</div>
                        </li>
                    <?php } ?>
                </ul>
                <?php
                    $precio = $lugar->precio;
                    $descuento = $lugar->precio * $lugar->descuento;
                    $subtotal = round($precio - $descuento, 2);
                ?>
                <div class="button-container">
                    <form action="carrito/carritoAccion.php" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $lugar->id ?>">
                        <input type="hidden" name="nombre" id="id" value="<?php echo $lugar->nombre ?>">
                        <input type="hidden" name="precio" id="id" value="<?php echo $lugar->precio ?>">
                        <input type="hidden" name="descuento" value="<?php echo $lugar->descuento ?>">
                        <label for="">Cantidad</label>
                        <input type="number" name="cantidad" min="0" max="6" style="display: block;margin-bottom:15px">
                        <a href="lugares.php#services" class="btn btn-dark|">Volver</a>
                        <button type='submit' name="btnAccion" value="agregar" class="btn-solid-reg page-scroll">Agregar a Carrito || S./<?php echo $subtotal; ?></button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="flex-imagen">
            <img src="/imagenes/<?php echo $lugar->imagen ?>" alt="">
        </div>
    </div>
<?php 
templates('footer');
?>