<?php

use App\DetalleVenta;
use App\Lugar;
use App\Paquete;
use App\Usuario;
use App\Vendedor;
use App\Ventas;

include 'includes/app.php';
    templates('header_admin');

    $cliente = Usuario::all();
    $paquete = Paquete::all();
    $ventas = Ventas::all();
    $vendedor = Vendedor::all(); 
    $lugares = Lugar::all();
    $detalleVenta = DetalleVenta::all();

?>
        <div class="opciones">
            <div class="opcion__card bg-danger">
                <div>
                    <i class="bi bi-person"></i> Registro de Cliente
                </div>
                <div class="opcion__card--texto">
                    Cantidad: <span><?php echo count($cliente); ?></span>
                </div>
            </div>
            <div class="opcion__card bg-primary">
                <div>
                    <i class="bi bi-lightbulb"></i> Registro de Paquete
                </div>
                <div class="opcion__card--texto">
                    Cantidad: <span><?php echo count($paquete); ?></span>
                </div>
            </div>
            <div class="opcion__card bg-secondary">
                <div>
                    <i class="bi bi-cart-check"></i> Registro de Ventas
                </div>
                <div class="opcion__card--texto">
                    Cantidad: <span><?php echo count($ventas); ?></span>
                </div>
            </div>
            <div class="opcion__card bg-warning">
                <div>
                    <i class="bi bi-patch-plus"></i> Registro de Vendedores
                </div>
                <div class="opcion__card--texto">
                    Cantidad: <span><?php echo count($vendedor); ?></span>
                </div>
            </div>
            <div class="opcion__card bg-violet">
                <div>
                    <i class="bi bi-person-square"></i> Registro de Lugares
                </div>
                <div class="opcion__card--texto">
                    Cantidad: <span><?php echo count($lugares); ?></span>
                </div>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped" style="width:100%"  id='example'>
                <thead>
                    <tr>
                        <th>Fecha de Compra</th>
                        <th>Nombre de Producto</th>
                        <th>Correo de cliente</th>
                        <th>Pago total</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($detalleVenta as $detalle): 
                    $id = $detalle->idVenta;
                    $id = filter_var($id,FILTER_VALIDATE_INT);
                    $venta = Ventas::find($id);
                    ?>
                    <tr>
                        <td><?php echo $venta->fecha ?></td>
                        <td><?php echo $detalle->nombreProducto ?></td>
                        <td><?php echo $venta->correo ?></td>
                        <td><?php echo $venta->total ?></td>
                        <td><?php 
                            if($venta->status == 'pendiente'){ ?>
                                <p class="alert alert-warning text-center"><?php echo 'pendiente' ?></p>
                            <?php }else{ ?>
                                <p class="alert alert-success text-center"><?php echo 'Completo' ?></p>
                        <?php }
                        ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
<?php 
    templates('footer_admin')
?>
