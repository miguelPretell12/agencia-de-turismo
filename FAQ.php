<?php 

include 'includes/app.php';

templates("header");
?>
<header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Preguntas Frecuentes</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->
<div class="container p-2">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header m-0" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        ¿Ques es DCS3?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         DCS3 es una empresa de turismo que se encarga de ofrecer lugares turisticos no tan explorado en el interior del pais
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header m-0" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        ¿Que tipos de pago aceptan?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Los pagos de los paquetes e lugares turisticos se aceptan en Paypal, Tarjeta de credito y Tarjeta de Debito, cabe resaltar que cada paquete se paga en dolares
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header m-0" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ¿Atiende las 24 horas del dia?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        No exactamente, atendemos desde las 9:30 am hasta 7:30 pm, para cualquier consulta sobre los lugares turisticos
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header m-0" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta4" aria-expanded="false" aria-controls="collapseThree">
      ¿Se pueden hacer modificaciones o anulaciones? 
      </button>
    </h2>
    <div id="pregunta4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Lastimosamente no, una vez completado el pago, ya no se padra modificar o anular el paquete turistico
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header m-0" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta5" aria-expanded="false" aria-controls="collapseThree">
      ¿A qué destinos está permitido viajar actualmente?
      </button>
    </h2>
    <div id="pregunta5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Actualmente se permite viajar a los destinos que cumplan los elementos de bioseguridad por la pandemia, y autorizado por el mismo ministerio de la Salud.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header m-0" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta" aria-expanded="false" aria-controls="collapseThree">
      ¿Como reservar mi viaje?
      </button>
    </h2>
    <div id="pregunta" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Primero elige el paquete que estee buscando, y luego en l seccion de carrito aparecera los productos seleccionados, por lo cual
        tendra que ingresar su correo para registrar la compra y despues de eso, pagar los productos seleccionados.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header m-0" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pregunta6" aria-expanded="false" aria-controls="collapseThree">
      ¿Cual es el limite de persona?
      </button>
    </h2>
    <div id="pregunta6" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Por la pandemia, solo 4 personas, y que estas cuatro personas tenga un cerrtificado que indique que se hicieron la prueba moleculares,
        y salga negativo.
      </div>
    </div>
  </div>
</div>
</div>
<?php 
templates("footer");
?>