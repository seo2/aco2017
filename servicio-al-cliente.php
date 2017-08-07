<?php
/*

Template name: Servicios al cliente

*/
?>
<?php include('header.php') ?> 
<?php include('include-top.php') ?>
<?php //include('include-slider-servicios-cliente.php') ?>
<?php include('include-search-no-slider.php') ?>

<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "CUSTOMER SERVICE";
	$tit2 = "Contact us";
	$tit3 = "TIME SCHEDULES";
	$tit4 = "Services";
	$tit5 = "HOW TO GET THERE";
	$btn1 = "View all our stores";
	$btn2 = "View more";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "SERVIÇO AO CLIENTE:";
	$tit2 = "Contate-Nos";
	$tit3 = "HORÁRIOS";
	$tit4 = "SERVIÇOS";
	$tit5 = "COMO CHEGAR";
	$btn1 = "Veja todas as nossas lojas";
	$btn2 = "Veja mais";
}else{ 
	$tit1 = "servicio al cliente";
	$tit2 = "contáctanos";
	$tit3 = "Horarios";
	$tit4 = "servicios";
	$tit5 = "cómo llegar";
	$btn1 = "ver todas las tiendas";
	$btn2 = "ver más";
} ?>  

    <div class="titulo_seccion sin_slider ">
        <div class="container">
        	<div class="row">
            	<div class="col-sm-12 col-md-10">
                	<h4 class="divider"><?php echo $tit1; ?></h4> 
            	</div>
				<div class="col-sm-12 col-md-2">
					<a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a>
				</div>
			</div>
        </div>
    </div> <!-- titulo seccion -->

    <section class="main_content">
    	<div class="container">
        	<div class="row">
        		<section class="servicios_cliente clearfix">
		 		<?php 
				    $detect = new Mobile_Detect();
				    	 
					if ($detect->isMobile()) { 
					   include('include-sac-mobile.php'); 
					   include('include-sac-como-llegar-mobile.php'); 
					}else{ 	 
						include('include-sac-desktop.php');
						include('include-sac-como-llegar-desktop.php');
					}
				?>
		            <div class="col-sm-6 col-md-6">
		                <div class="box">
		                    <div class="box_slider">
		                        <div class="item disable-owl-swipe">
		                            <a href="<?php bloginfo('url'); ?>/servicio-al-cliente/servicios/">
		                                <div class="caption">
		                                    <p>&nbsp </p>
		                                    <h3><?php echo $tit4; ?> </h3>
										    <div class="divider"> </div>
		                                </div>
		                                <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_sac_servicios.jpg);"> </div>                             
		                            </a>
		                       	</div> <!-- item -->
		                    </div><!-- box slider  -->
		                </div><!-- servicios -->
		            </div>

					<div id="content_como_llegar" class="content_servicio collapse hidden-xs">
                <div id="content_como_llegarancla" class="anclita"></div>
                <div class="container">
                    <h4 class="divider verde"><?php echo $tit5; ?></h4> 
                    <div class="close_servicio" data-target="#content_como_llegar"></div>
                      <div class="row">
                          <div class="col-md-12 ">
                            <div class="desc_servicio">
                               <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.819335987263!2d-70.58139348498179!3d-33.401877280787886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf26243dcc31%3A0xc9aacb64a9fec91!2sParque+Arauco!5e0!3m2!1ses!2scl!4v1498239272187' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe></div>
                               </div>
                          </div>
                          <div class="datos_como_llegar clearfix">
                              <div class="col-xs-2">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/map_turistik.png" alt="" class="img-responsive center-block">
                              </div>
                              <div class="col-xs-10">
                                    <div class="centerer">
                    										<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                    										<p>The travelers must wait for Turistik at the indicated time and place.</p>
                    										<p>For further information about this service, contact Turistik at <strong>(56- 2) 28201000 </strong>or e-mail:<a href="mailto:contacto@turistik.cl"><strong>contacto@turistik.cl</strong></a></p>
                    										<?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){  ?>
                    										<p>O passageiro deve esperar no lugar indicado por Turistik na hora.</p>
                    										<p>Para maiores informações deste serviço deve-se contatar com Turistik no telefone: <strong>(56- 2) 28201000 </strong>ou pelo e-mail: <a href="mailto:contacto@turistik.cl"><strong>contacto@turistik.cl</strong></a></p>
                    										<?php }else{  ?>
                    										<p>El pasajero debe esperar en el lugar indicado por Turistik a la hora.</p>
                    										<p> Para mayor información de este servicio contactarse con Turistik al <strong>(56- 2) 28201000 </strong>o el e-mail: <a href="mailto:contacto@turistik.cl"><strong>contacto@turistik.cl</strong></a></p>
                    										<?php } ?>  
                                    </div>
                              </div>
                           <!--    <div class="clearfix"></div>
                              <div class="col-xs-2">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/map_transfer.png" alt="" class="img-responsive center-block">
                              </div>
                              <div class="col-xs-10">
                                    <div class="centerer">
                                      <p>Parque Arauco Shopping Center pone a su disposición y sin costo el servicio regular de Transfer Gratis, desde y hacia los hoteles. Este servicio recorre los principales hoteles de la cuidad los 365 días del año.</p>
                                       <p> Para mayor información y detalles nuestros servicios al cliente, ingresa <a href=""><strong>aquí</strong></a></p>
                                    </div>
                               
                              </div> -->
                          </div>
                        

                        </div>
                        
                    </div> <!-- container -->
                </div> <!-- content como llegar -->
         
					<div class="col-sm-6 col-md-6">
						<div class="box">
							<div class="box_slider owl-carousel owl-theme">
								<div class="item">
									<a href="<?php bloginfo('url'); ?>/travellers/">
                                    	<div class="logo_seccion logo_travellers" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_travellers_blanco.svg);"> </div>                             
										<div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_travellers.png);"> </div>                             
									</a>
								</div>
							</div><!-- box slider  -->
						</div> <!-- galeria -->
					</div>
				</section>
			</div> <!-- row -->
<?php include('footer.php') ?>

