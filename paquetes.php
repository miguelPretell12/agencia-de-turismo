<?php
include 'includes/app.php';
use App\Paquete;
$paquetes = Paquete::all();
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

    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Paquetes Turisticos</div>
                    <h2>Choose The Service Package<br> That Suits Your Needs</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach($paquetes as $paquete): ?>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $paquete->codpaquete ?></h3>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Precio Regular: S./<?php echo $paquete->precio ?></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Categoria: <?php echo $paquete->categoria ?></div>
                                </li>
                                <?php 
                                    if($paquete->descuento > 0.00){?>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Descuento de <?php echo $paquete->descuento*100 ?>%</div>
                                    </li>
                               <?php }
                                ?>
                            </ul>
                            <p class="price">Starting at <span>S./<?php
                                $precio = $paquete->precio;
                                $descuento = $paquete->precio * $paquete->descuento;
                                $subtotal = round($precio - $descuento, 2);
                                echo $subtotal;
                            ?></span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="paquete.php?id=<?php echo $paquete->id; ?>">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->
                    <?php endforeach; ?>
                    <!--end foreach -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="derecha-flex">
            <a href="lugares.php" class="btn-solid-reg" >Ver todos los lugares</a>
        </div>
        
    </div> <!-- end of cards-2 -->
    <!-- end of services -->

<?php 
templates('footer');
?>