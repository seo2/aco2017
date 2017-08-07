
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "get update";
	$tit2 = "DISCOUNTS";
	$tit3 = "Services";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "atualização";
	$tit2 = "DESCONTOS";
	$tit3 = "Serviços";
}else{ 
	$tit1 = "actualízate";
	$tit2 = "descuentos";
	$tit3 = "servicios";
} ?>
<div class="box">
        <!-- arauco tag -->
        <a href="<?php bloginfo('url'); ?>/arauco-tag" class="box_enlace">
          <div class="box_img" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_arauco_tag.png);"> </div>
          <div class="caption">
              <h3><?php echo $tit1; ?></h3>
              <div class="divider"> &nbsp </div>
          </div>
        </a>
 </div> <!-- arauco tag -->

  <div class="box">
     <div class="box_slider owl-carousel owl-theme ">
           <div class="item">
               <a href="<?php bloginfo('url'); ?>/servicio-al-cliente/servicios/">
                    <div class="caption">
                         <p>&nbsp </p>
                        <h3><?php echo $tit3; ?> </h3>

                        <div class="divider"> </div>
                    </div>
                    <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_servicios.jpg);"> </div>                             
               </a>
            </div> <!-- item -->
             <!-- <div class="item">
               <a href="">
                    <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_zona.jpg);"> </div>                             
               </a>
            </div>  item -->
       </div><!-- box slider  -->
 </div><!-- servicios  -->

 <div class="box">
       <div class="box_slider owl-carousel owl-theme">
            <div class="item">
                <a href="<?php bloginfo('url'); ?>/travellers">
                      <div class="logo_seccion logo_travellers" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_travellers_blanco.svg);"> </div>                             
                     <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_travellers.png);"> </div>                             
                </a>
             </div>
        </div><!-- box slider  -->
 </div><!-- travellers -->



