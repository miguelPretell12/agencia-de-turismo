<?php
include 'includes/app.php';

use App\Lugar;
use App\Paquete;

$lugares = Lugar::all3();
$paquetes = Paquete::all3();
templates('header');

?>
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>DCS3 ofrece <span id="js-rotating">Relajación, paz, turismo</span></h1>
                            <p class="p-heading p-large"></p>
                            <a class="btn-solid-lg page-scroll" href="#intro">Intro</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
    
    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">INTRO</div>
                        <h2>Agencia de Viajes Desestres - DCS3</h2>
                        <p>Launching a new company or developing the market position of an existing one can be quite an overwhelming processs at times.</p>
                        <p class="testimonial-text">"Ofrecer Productos y servicios, de calidad tangible para satisfacer las necesidades y preferencias de nuestros clientes con la mejor relación precio- calidad / Comprometidos siempre con el crecimiento de nuestro equipo humano, el mejoramiento de nuestros procesos y una óptima rentabilidad"</p>
                        <div class="testimonial-author">Erick Salazar - CEO</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="img/vinicunca-mochilero.webp" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Environment Analysis</h4>
                            <p>The starting point of any success story is knowing your current position in the business environment</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Development Planning</h4>
                            <p>After completing the environmental analysis the next stage is to design and  plan your development strategy</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-chart-pie fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">Precios</h4>
                            <p>Precios comodos </p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->


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
                            <p><?php echo $lugar->descripcion ?></p>
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
    

    <!-- Details 1 -->
	<div id="details" class="accordion">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
            <div class="derecha-flex">
                <a href="paquetes.php" class="btn-solid-reg page-scroll">Ver mas Paquetes turisticos</a>
            </div>
            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">
                <h2>Paquetes turisticos</h2>
                <?php foreach($paquetes as $indice=>$paquete): ?>
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapse<?php echo $indice?>" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="circle-numbering"><?php echo $indice+1 ?></span><span class="accordion-title"><?php echo $paquete->codpaquete ?></span>
                        </span>
                    </div>
                    <div id="collapse<?php echo $indice ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="accordion-body">
                            <?php echo $paquete->contenido ?>
                        </div>
                    </div>
                </div> <!-- end of item -->
                <?php endforeach; ?>
            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->            
		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
	<div class="tabs">
        <div class="area-1">
            <div class="tabs-container">
                
                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="ariaTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-th"></i> Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-th"></i> Expertise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-th"></i> Quality</a>
                    </li>
                </ul>
                <!-- end of tabs links -->
                
                <!-- Tabs Content -->
                <div class="tab-content" id="ariaTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <h4>Business Services For Companies</h4>
                        <p>Aria provides the most innovative and customized business services in the industry. Our <a class="green page-scroll" href="#services">Services</a> section shows how flexible we are for all types of budgets.</p>
                        
                        <!-- Progress Bars -->
                        <div class="progress-container">
                            <div class="title">Business Development 100%</div>
                            <div class="progress">
                                <div class="progress-bar first" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="title">Opportunity Spotting 76%</div>
                            <div class="progress">
                                <div class="progress-bar second" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="title">Online Marketing 90%</div>
                            <div class="progress">
                                <div class="progress-bar third" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div> <!-- end of progress-container -->
                        <!-- end of progress bars -->
                        
                    </div> <!-- end of tab-pane --> 
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <ul class="list-unstyled li-space-lg first">
                            <li class="media">
                                <div class="media-bullet">1</div>
                                <div class="media-body"><strong>High quality</strong> is on top of our list when it comes to the way we deliver the services</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">2</div>
                                <div class="media-body"><strong>Maximum impact</strong> is what we look for in our actions</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">3</div>
                                <div class="media-body"><strong>Quality standards</strong> are important but meant to be exceeded</div>
                            </li>
                        </ul>
                        <ul class="list-unstyled li-space-lg last">
                            <li class="media">
                                <div class="media-bullet">4</div>
                                <div class="media-body"><strong>We're always looking</strong> for industry leaders to help them win their market position</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">5</div>
                                <div class="media-body"><strong>Evaluation</strong> is a key aspect of this business and important</div>
                            </li>
                            <li class="media">
                                <div class="media-bullet">6</div>
                                <div class="media-body"><strong>Ethic</strong> procedures ar alwasy at the base of everything we do</div>
                            </li>
                        </ul>
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <p><strong>We strive to achieve</strong> 100% customer satisfaction for both types of customers: hiring companies and job seekers. Types of customers: <a class="green" href="#your-link">with huge potential</a></p>
                        <p><strong>Our goal is to help</strong> your company achieve its full potential and establish long term stability for <a class="green" href="#your-link">the stakeholders</a></p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">It's easy to get a quotation, just call our office anytime</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">We'll get back to you with an initial estimate soon</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Get ready to see results even after only 30 days</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Ask for a quote and start improving your business</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Just fill out the form and we'll call you right away</div>
                            </li>
                        </ul>
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of tabs-container -->
        </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2"></div> <!-- end of area-2 -->
    </div> <!-- end of tabs -->
    <!-- end of details 2 -->


    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Read Our Customer Testimonials</h2>
                    <p class="p-heading">Our clients are our partners and we can not imagine a better future for our company without helping them reach their objectives</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">The guys from Aria helped with getting my business off the ground and turning into a profitable company.</div>
                                            <div class="testimonial-author">Jude Thorn - Founder</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I purchased the Growth Accelerator service pack a few years ago and I renewed the contract each year. </div>
                                            <div class="testimonial-author">Marsha Singer - Marketer</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Aria's CEO personally attends client meetings and gives his feedback on business growth strategies.</div>
                                            <div class="testimonial-author">Roy Smith - Developer</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">At the beginning I thought the prices are a little high for what they offer but they over deliver each and every time.</div>
                                            <div class="testimonial-author">Ronald Spice - Owner</div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I recommend Aria to every business owner or growth leader that wants to take his company to the next level.</div>
                                            <div class="testimonial-author">Lindsay Rune - Manager</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">My goals for using Aria's services seemed high when I first set them but they've met them with no problems.</div>
                                            <div class="testimonial-author">Ann Black - Consultant</div>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->


    <!-- Call Me -->
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CALL ME</div>
                        <h2 class="white">Have Us Contact You By Filling And Submitting The Form</h2>
                        <p class="white">You are just a few steps away from a personalized offer. Just fill in the form and send it to us and we'll get right back with a call to help you decide what service package works.</p>
                        <ul class="list-unstyled li-space-lg white">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">It's very easy just fill in the form so we can call</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">During the call we'll require some info about the company</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Don't hesitate to email us for any questions or inquiries</div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                   
                    <!-- Call Me Form -->
                    <form id="callMeForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lname" name="lname" required>
                            <label class="label-control" for="lname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lphone" name="lphone" required>
                            <label class="label-control" for="lphone">Phone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="lemail" name="lemail" required>
                            <label class="label-control" for="lemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control-select" id="lselect" required>
                                <option class="select-option" value="" disabled selected>Interested in...</option>
                                <option class="select-option" value="Off The Ground">Off The Ground</option>
                                <option class="select-option" value="Accelerated Growth">Accelerated Growth</option>
                                <option class="select-option" value="Market Domination">Market Domination</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox white">
                            <input type="checkbox" id="lterms" value="Agreed-to-Terms" name="lterms" required>I agree with Aria's stated <a class="white" href="privacy-policy.html">Privacy Policy</a> and <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">CALL ME</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of call me form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->

    <!-- Team -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Team Of Consultants</h2>
                    <p class="p-heading">We're only as strong and as knowledgeable as our team. So here are the men and women which help customers meet goals and grow companies</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-1.png" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large">John Whitelong</p>
                        <p class="job-title">General Manager</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-2.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Veronique Smith</p>
                        <p class="job-title">Business Developer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-3.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Chris Zimerman</p>
                        <p class="job-title">Online Marketer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-4.png" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large">Mary Villalonga</p>
                        <p class="job-title">Community Manager</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of team -->


    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/about.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">ABOUT</div>
                        <h2>We're Passionate About Delivering Growth Services</h2>
                        <p>Our goal is to provide the right business growth services at the appropriate time so companies can benefit from the created momentum and thrive for a long period of time</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Everything we recommend has direct positive impact</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">You will become an important partner of our company</div>
                            </li>
                        </ul>

                        <!-- Counter -->
                        <div id="counter">
                            <div class="cell">
                                <div class="counter-value number-count" data-count="200">1</div>
                                <div class="counter-info">Happy<br>Users</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="121">1</div>
                                <div class="counter-info">Issues<br>Solved</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="159">1</div>
                                <div class="counter-info">Good<br>Reviews</div>
                            </div>
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->      
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by our office for a cup of coffee and just use the contact form below for any questions and inquiries</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>22nd Innovative Street, San Francisco, CA 94043, US</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 126</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+81 720 22 128</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">office@aria.com</a></li>
                        </ul>
                        <h3>Follow Aria On Social Media</h3>

                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-pinterest fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


<?php 
templates("footer");

?>