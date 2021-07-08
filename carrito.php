<?php
include 'includes/app.php';

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

    <div class="container">
        <h2>Carrito de compras</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Descuento</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $total = 0; 
                foreach($_SESSION['carrito'] as $producto): ?>
                    <tr>
                        <td><?php echo $producto['nombre']  ?></td>
                        <td><?php echo $producto['precio']  ?></td>
                        <td><?php echo $producto['cantidad']  ?></td>
                        <td><?php echo round($producto['descuento']*100,2)?></td>
                        <td align="right"><?php 
                            $subtotal = $producto['precio']*$producto['cantidad'];
                            $descuento = $subtotal * $producto['descuento'];
                            $total1 = $subtotal - $descuento;
                        echo round($total1,2)  ?></td>
                        <td>
                            <form action="carrito/carritoAccion.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
                                <button class="btn btn-danger" type="submit"
                                    name="btnAccion" value="eliminar"
                                >Eliminar</button>
                            </form>
                        </td>
                    </tr>

                <?php
                $total = $total + ($total1);
                endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" align="right">
                            <h3>Total</h3>
                        </td>
                        <td align="right">$/.<?php echo $total ?></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="flex-total mb-2">
            <form action="Paypal.php" method="post">
                <div class="alert alert-success">
                    <div class="form-group">
                        <label for="email">Correo de contacto</label>
                        <input type="email" name="email" class="form-control" type="text"
                            placeholder="Por favor escribe tu correo" required >
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Los productos se enviara a este correo</small>
                </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder" name="btnAccion" >
                        Procede a pagar
                    </button>
                </form> 
        </div>
    </div>

<?php 

templates("footer");
?>