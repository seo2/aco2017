    <div id="menu_mobile" class="navmenu navmenu-default navmenu-fixed-left offcanvas">
    <!--   <a class="navmenu-brand" href="#">Project name</a> -->

        <div class="logo text-center">
                <a href="<?php bloginfo('url'); ?>"> parque arauco</a>
        </div> <!-- brand -->

    <div class="rrss visible-xs visible-sm center-block text-center">
      <ul>
        <li><a href="https://www.facebook.com/parauco" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/parquearauco/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="https://twitter.com/parquearauco" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
       <!--  <li><a href="https://es.pinterest.com/parquearauco/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li> -->
       <li><a href="<?php bloginfo('url'); ?>/horarios"><i class="fa fa-clock-o" aria-hidden="true"></i></a></li>
      </ul>
     </div><!-- RRSS -->

    <!--   <ul class="nav navmenu-nav">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
    
      </ul> -->
    
            <div class="container width">
                <div class="row">
                  <ul class="nav navbar-nav lista_menu">
                      <li class="active"><a href="<?php bloginfo('url'); ?>">Home</a></li>
                     <li><a id="btn_distrito" 		href="<?php bloginfo('url'); ?>/distrito-de-lujo"><?php echo $menu2; ?></a></li>
                     <li><a id="btn_boulevard" 		href="<?php bloginfo('url'); ?>/boulevard#boulevard"><?php echo $menu3; ?></a></li>
                     <li><a id="btn_piso" 			href="<?php bloginfo('url'); ?>/piso-diseno"><?php echo $menu4; ?></a></li>
                     <li><a id="btn_entretencion" 	href="<?php bloginfo('url'); ?>/novedades#entretencion"><?php echo $menu5; ?></a></li>
                     <li><a id="btn_novedades" 		href="<?php bloginfo('url'); ?>/novedades#novedades"><?php echo $menu6; ?></a></li>
                     <li><a id="btn_tiendas" 		href="<?php bloginfo('url'); ?>/tiendas#tiendas"><?php echo $menu7; ?></a></li>
                   </ul>
                    <div class="divisor_h text-center"></div>
                     <ul class="nav navbar-nav lista_menu">
                       <li><a href="<?php bloginfo('url'); ?>/arauco-tag"><?php echo $menu8; ?></a></li>
<!--                        <li><a href="http://www.revistadetalle.cl/" target="_blank"><?php echo $menu9; ?></a></li> -->
                       <li><a href="<?php bloginfo('url'); ?>/servicio-al-cliente"><?php echo $menu10; ?></a></li>
                       <li><a href="<?php bloginfo('url'); ?>/travellers"><?php echo $menu11; ?></a></li>
                   </ul>
                   
                   <div class="divisor_h text-center"></div>

                    <div class="col-sm-12">
                      <!-- col derecha -->
                          <div class="row">
                            <div class="col-sm-12"> 
                                  <!-- <div class="faq">
                                        <a href="">
                                          preguntas <i class="fa fa-comments-o" aria-hidden="true"> </i><br>
                                            <span>frecuentes</span>
                                        </a>
                                 </div> -->
                              <div class="horarios">
                                    <ul class="clearfix">
                                      <li>
                                        <a href="<?php bloginfo('url'); ?>/horarios"><i class="fa fa-clock-o" aria-hidden="true"></i>  <?php echo $tit1; ?> </a>
                                      </li>

                                      <li>
                                        <a href="https://www.google.es/maps/place/Parque+Arauco/@-33.4019089,-70.5798102,18z/data=!4m13!1m7!3m6!1s0x9662cf4657be4221:0xedf29683ef50290a!2sAv+Presidente+Kennedy,+Regi%C3%B3n+Metropolitana,+Chile!3b1!8m2!3d-33.3977769!4d-70.5709762!3m4!1s0x9662cf26243dcc31:0xc9aacb64a9fec91!8m2!3d-33.4018773!4d-70.5792048" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $tit2; ?> </a>
                                      </li>
                                    </ul>
                              </div>
                            </div>
                            <div class="col-sm-12"></div>
                        </div> <!-- row -->
                        <div class="row">
                          <div class="col-sm-12 col_box_news_letter"> 
                            <div class="box_newsletter" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_box_newsletter.jpg);">  
                              		<h3><?php echo $tit3; ?></h3>
                  									<form class="form_neswsletter" role="" id="form_neswsletter">
                  										<div class="box_input">
                  											<input  class="form-control" type="email" placeholder="" required name="mail"/>
                  											<button type="submit">
                  												<i class="fa fa-envelope" aria-hidden="true"></i>
                  											</button>
                  										</div>
                  										<div class="checkbox">
                  											<label>
                  												<input type="checkbox" id="acepto"> <a href=""><?php echo $tit4; ?></a>
                  											</label>
                  										</div>
                  									</form>
                            </div>
                          </div>
                        <div class="clearfix"></div>
                        <!-- mobile menu -->
                        <section class="search_home_xs visible-xs visible-sm">
                            <?php // include('include-search-home-mobile.php'); ?>
                        </section>
                        </div>
                      </div><!-- col -->
                </div>
            </div>
    
    </div>

    <div id="nav_mobile" class="navbar navbar-default navbar-fixed-top">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
				<span class="icon-bar top_bar"></span>
				<span class="icon-bar middle_bar"></span>
				<span class="icon-bar bottom_bar"></span>
			</button>
			<div class="logo">
                <a href="<?php bloginfo('url'); ?>"> parque arauco</a>
           	</div> <!-- brand -->
            <div id="lang_switcher" class="visible-xs visible-sm">
            	<select name="language" class="selectpicker show-menu-arrow" id="language"> 
					<?php icl_post_languages_mobile(); ?>
                </select>
            </div>
            <a class="close_tienda" href="javascript:void(0);" data-id=""></a>
       </div>
    </div>

