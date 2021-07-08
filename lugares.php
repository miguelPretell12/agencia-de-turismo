<?php
include 'includes/app.php';
use App\Lugar;
$lugares = Lugar::all();

templates("header");
?>
    <!--Header-->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Carrito</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Lugares Turisticos</div>
                    <h2>Choose The Service Package<br> That Suits Your Needs</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach($lugares as $lugar): ?>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="imagenes/<?php echo $lugar->imagen ?>" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $lugar->nombre ?></h3>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Precio Regular: S./<?php echo $lugar->precio ?></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Departamento-Provincia: <?php echo $lugar->departamento.'-'.$lugar->provincia ?></div>
                                </li>
                                <?php 
                                    if($lugar->descuento > 0.00){?>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">Descuento de <?php echo $lugar->descuento*100 ?>%</div>
                                    </li>
                               <?php }
                                ?>
                            </ul>
                            <p class="price">Starting at <span>S./<?php
                                $precio = $lugar->precio;
                                $descuento = $lugar->precio * $lugar->descuento;
                                $subtotal = round($precio - $descuento, 2);
                                echo $subtotal;
                            ?></span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="detail.php?id=<?php echo $lugar->id; ?>">DETAILS</a>
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
templates("footer");
?>