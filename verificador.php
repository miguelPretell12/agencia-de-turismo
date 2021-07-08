<?php 

include 'includes/app.php';

templates("header");
?>
<?php 

$login = curl_init(LINKAPI."/v1/oauth2/token");

curl_setopt($login, CURLOPT_RETURNTRANSFER,true);

curl_setopt($login,CURLOPT_USERPWD,CLIENTID.":".SECRET);

curl_setopt($login, CURLOPT_POSTFIELDS,"grant_type=client_credentials");

$respuesta = curl_exec($login);


$objRespuesta = json_decode($respuesta);

$accessToken = $objRespuesta->access_token;

$venta = curl_init(LINKAPI."/v1/payments/payment/".$_GET['paymentID']);

curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer ".$accessToken));

curl_setopt($venta, CURLOPT_RETURNTRANSFER,true);

$respuestaVenta = curl_exec($venta);

$objeDatosTransaccion = json_decode($respuestaVenta);


$state = $objeDatosTransaccion->state;
$email = $objeDatosTransaccion->payer->payer_info->email;

$total = $objeDatosTransaccion->transactions[0]->amount->total;
$currency = $objeDatosTransaccion->transactions[0]->amount->currency;
$custom = $objeDatosTransaccion->transactions[0]->custom;

$clave=explode("#",$custom);

$Sid = $clave[0];
$ClaveVenta=$clave[1];

curl_close($venta);
curl_close($login);

$mensajePaypal = '';
 if($state == 'approved'){
     $mensajePaypal="<h3>Pago aprobado</h3>";
     $sentencia = $pdo->prepare("UPDATE tblventa 
     SET PaypalDatos = :PaypalDatos, status = 'aprobado'
     WHERE id = :id
      ");
      $sentencia->bindParam(":id",$ClaveVenta);
    $sentencia->bindParam(":PaypalDatos",$respuestaVenta);
      $sentencia->execute();

     $sentencia = $pdo->prepare("UPDATE tblventa
   SET status = 'completo'
     WHERE ClaveTransaccion = :ClaveTransaccion and total = :total and id=:id
      ");
     $sentencia->bindParam(":id",$ClaveVenta);
    $sentencia->bindParam(":total",$total);
    $sentencia->bindParam(":ClaveTransaccion",$Sid);
    $sentencia->execute();
     session_destroy();
 }else{
     $mensajePaypal="<h3>Hay un problema con el pago de paypal</h3>";
}
?>
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pago</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<div class="jumbotron">
    <h1 class="display-4">¡ Listo !</h1>

    <div class="row">
        <div class="col-2">
            <div class="card">
                <div class="card-body">
                    <?php echo $mensajePaypal ?>
                </div>
            </div>
        </div>
    </div>
    </p>
</div>

<?php 
templates("footer");
?>