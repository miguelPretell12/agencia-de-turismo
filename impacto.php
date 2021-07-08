<?php 
    require 'includes/app.php';
    templates("header");
?>
    <header class="header">
        
        <div>
            <div class="image">
                <img src="/img/img1.svg" alt="imagen 1">
                <h1>Conoce mas sobre DCS3</h1>
            </div>
        </div>
        <div style="height: 150px; overflow: hidden;" class="option" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C66.25,199.64 326.41,-20.42 500.00,49.99 L504.74,152.26 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>
    </header>
    <main>
        <h2 class="text-center p-5">Sobre Nosotros</h2>
        <div class="flex-impacto mb-2">
            <div class="flex-impacto--caja">
                <img src="img/img3.jpg" alt="">
            </div>
            <div class="flex-impacto--caja p-3">
                <h3 class="text-center">Impacto Social</h3>
                <p class="text-center" style="font-size: 15px; line-height: 2rem;">
                    El impacto social que va a causar el emprendimiento DCS3 en el pueblo donde se realizará el turismo, será la generación de puestos de empleo a distintas personas con habilidades artesanales y/o conocimientos de la historia del pueblo, así como, también la revalorización de las culturas y costumbres ya casi olvidadas.
                </p>
            </div>
        </div>
        <div class="flex-impacto mb-2">
            <div class="flex-impacto--caja order-1">
                <img src="img/img4.jpg" alt="">
            </div>
            <div class="flex-impacto--caja p-3">
                <h3 class="text-center">Impacto medioambiental</h3>
                <p class="text-center" style="font-size: 15px; line-height: 2rem;">
                    El emprendimiento DCS3, fomentara la concientización del cuidado del medioambiente y/o áreas verdes de los lugares turísticos del pueblo Ayacucho, asimismo, promueve la reforestación de árboles para así poder vivir con un ambiente saludable y tener un oxigeno puro sin perjudicar la flora de la localidad.
                </p>
            </div>
        </div>
        <div class="flex-impacto">
            <div class="flex-impacto--caja">
                <img src="img/img5.jpg" alt="">
            </div>
            <div class="flex-impacto--caja p-3">
                <h3 class="text-center">Impacto Economico</h3>
                <p class="text-center" style="font-size: 15px; line-height: 2rem;">
                    El factor económico que ocasionara el emprendimiento DCS3 en el pueblo donde se realizara el turismo es la mejora en los servicios públicos ya que los turísticas están acostumbrados a tener una buena comodidad, en este caso nosotros ayudaremos a que la persona pueda aliviar el estrés, disfrutando el aire puro y fresco del lugar, asimismo se brindara numerosos empleos ya sean en hoteles, restaurantes, guías turísticos y área de servicio en general y finalmente promueve el turismo interno generando una apropiación cultural nacional y distribución de la riqueza, existen dos efectos los cuales son:
                </p>
                <p class="text-contain">
                    <span>Efectos Primarios: </span>
                    El pago del turista, el hotel, restaurante, guía (pago hacia la empresa) 
                </p>
                <p class="text-contain">
                    <span>Efectos Secundarios: </span>
                    El apoyo del emprendimiento hacia la artesanía local.
                </p>
            </div>
        </div>
    </main>
<?php 
templates("footer");
?>