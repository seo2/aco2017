<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "THE BEST";
	$tit2 = "FLAVORS";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "OS MELHORES";
	$tit2 = "sabores";
}else{ 
	$tit1 = "los mejores";
	$tit2 = "sabores";
} ?> 


                <div class="content_promos clearfix">
                  <div class="col-sm-12">
                    <div class="main_title">
                        <h3><?php echo $tit1; ?></h3>
                        <h4 class="divider_left"><?php echo $tit2; ?></h4>
                    </div>
                  </div>

                  <section class="otras_tiendas clearfix">
	                <div class="grid_tiendas">
		                <?php
			            
						$tiendas = $db->rawQuery("select * from pak_tiendas where idioma = $idioma and tipo = 110 order by rand() limit 4");
						if($tiendas){
						foreach ($tiendas as $t) {   
                        	$imagen = get_img_tienda($t['punto_interes']);
                        	if(!$imagen){
                            	$imagen 	= "/assets/img/demobgtienda.jpg";
							  	$imagen	 	= get_template_directory_uri().$imagen;
                        	}else{
                            	$imagen 	= '/ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
                            	$params1 	= array( 'width' => 650, 'height' => 650, 'crop' => true );	
							  	$imagen	 	= get_template_directory_uri().$imagen;
							  	$imagen  	= bfi_thumb( $imagen, $params1 );
                        	}
			            ?>    
                            <div class="col-sm-3 caja_tienda"> 
                                <div class="item_tienda" id="tienda_<?php echo $t['punto_interes']; ?>">
                                    <div  class="tienda">
                                        <a class="btn_tienda" href="javascript:void(0);"  >
                                            <span id="adidas" class="overlay_img" data-id="<?php echo $t['punto_interes']; ?>" data-logo="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" data-desc='<?php echo trim($t['descripcion']); ?>' data-img="<?php echo $imagen; ?>" data-fono="<?php echo $t['telefono_punto_interes']; ?>" data-piso="<?php echo $t['numero_piso']; ?>" data-url="<?php echo $t['url_punto_interes']; ?>" data-mapa="<?php bloginfo('template_url'); ?>/ws/uploads/plano_<?php echo $t['punto_interes']; ?>.jpg" data-nombre="<?php echo $t['nombre']; ?>" data-tipo="<?php echo $t['tipo']; ?>"></span>
                                            <img class="img-responsive" src="<?php echo $imagen; ?>">
                                          </a>
                                          <div class="box_logo_tienda">
                                            <div class="logo_tienda">
                                                <img src="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" alt="" class="img-responsive">
                                            </div> <!-- logo_tienda -->
                                          </div> <!-- box logo tienda -->
                                    </div> <!--  tienda -->
                                </div> <!-- item tienda -->
                            </div> <!-- col sm 3 -->   
				<?php
					}
				}  		
				?>           
	                </div>
                            
                  </section> <!-- end otras tiendas -->
               
                </div><!-- content promos -->