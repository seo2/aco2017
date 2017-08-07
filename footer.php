<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "CUSTOMER SERVICE";
	$tit2 = "EVERYTHING YOU NEED TO KNOW";
	$tit3 = "Where we are, parking fees, contact and FAQ.";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "SERVIÇO AO CLIENTE:";
	$tit2 = "TUDO QUE VOCÊ PRECISA SABER";
	$tit3 = "Onde estamos, taxas de estacionamento, contato e perguntas mais frequentes.";
}else{ 
	$tit1 = "servicio al cliente";
	$tit2 = "TODO LO QUE NECESITAS SABER";
	$tit3 = "Dónde estamos, tarifas de estacionamiento, contacto y preguntas frecuentes.";
} ?> 
    		<div class="row">
                <div class="col-sm-12">
                    <div class="image_dynamic hover">
                    	<a href="<?php bloginfo('url'); ?>/servicio-al-cliente">
							<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_servicio_cliente.png);"> </div>
                            <div class="caption_lg">
                            	<h3><?php echo $tit1; ?></h3>
                                <h4 class="divider"><?php echo $tit2; ?></h4>
                                <p><?php echo $tit3; ?></p>
                             <!--    <div class="text-center">
                                  <a class="btn btn-default btn_blanco" href="http://revistadetalle.cl/" target="_blank" role="button">ver más</a>
                                </div>  -->
                            </div><!-- caption_lg -->
                    	</a>
                	</div>
                </div>
            </div><!-- END MAIN ROW -->
		</div> <!-- END MAIN CONTAINER -->
    </section> <!-- END MAIN_CONTENT -->
            
    <?php include('include-visitanos.php') ?>

<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$menu1 = "Investor Relations";
	$menu2 = "COMMERCIAL CONTACT";
	$menu3 = "CORPORATE CONDUCT CODE";
	$menu4 = "TERMS AND CONDITIONS OF USE";
	$menu5 = "SALES REPORTS";
	$menu6 = "SUPPLIERS AND TENANTS";
	$menu7 = "LEGAL BASIS FOR TENDERS";
	$tit1  = "see on maps";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$menu1 = "RELAÇÕES COM INVESTIDORES";
	$menu2 = "CONTATO COMERCIAL";
	$menu3 = "CÓDIGO DE CONDUTA EMPRESARIAL";
	$menu4 = "TERMOS E CONDIÇÕES DE USO";
	$menu5 = "RELATÓRIOS DE VENDAS";
	$menu6 = "PROVEDORES E LOCATARIOS";
	$menu7 = "CONCURSOS LEGAIS";
	$tit1  = "VER NO MAPA";
}else{ 
	$menu1 = "Investor Relations";
	$menu2 = "Contacto Comercial";
	$menu3 = "Código Conducta Empresarial";
	$menu4 = "Términos y Condiciones de Uso";
	$menu5 = "Relatorios de ventas";
	$menu6 = "Proveedores y Locatarios";
	$menu7 = "Legales concursos";
	$tit1  = "ver en maps";
} ?> 
    <div class="container">
     <footer>
      <div class="row">
          <div class="col-xs-12 col-sm-4">
            <ul class="menu_footer">
              <li class=""><a href="http://www.parauco.com/" target="_blank"><?php echo $menu1; ?></a></li>
              <li><a href="<?php bloginfo('url'); ?>/contacto-comercial"><?php echo $menu2; ?></a></li>
              <li><a href="https://secure.ethicspoint.com/domain/media/es/gui/23025/index.html" target="_blank"><?php echo $menu3; ?></a></li>
              <li><a href="<?php bloginfo('url'); ?>/terminos-y-condiciones"><?php echo $menu4; ?></a></li>
              <li><a href="http://sistemas.parquearauco.cl/Relatorios/Inicio.aspx" target="_blank"><?php echo $menu5; ?></a></li>
              <li><a href="http://sistemas.parquearauco.cl/Portal" target="_blank"><?php echo $menu6; ?></a></li>
              <li><a href="<?php bloginfo('url'); ?>/legales-concursos"><?php echo $menu7; ?></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6">
              <ul class="bullets">
                <li class="bullet clearfix">
                  <div class="bullet-icon bullet-icon-1">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <div class="bullet-content">
                    <h2>Parque Arauco Kennedy</h2>
                    <p>Av. Pdte. Kennedy Nº5413, <br>
                    Las Condes. Santiago Chile. <br>
                    <a href="https://www.google.es/maps/place/Parque+Arauco/@-33.4019089,-70.5798102,18z/data=!4m13!1m7!3m6!1s0x9662cf4657be4221:0xedf29683ef50290a!2sAv+Presidente+Kennedy,+Regi%C3%B3n+Metropolitana,+Chile!3b1!8m2!3d-33.3977769!4d-70.5709762!3m4!1s0x9662cf26243dcc31:0xc9aacb64a9fec91!8m2!3d-33.4018773!4d-70.5792048" class="link_rojo" target="_blank"><?php echo $tit1; ?></a></p>
                  </div>
                </li>  
                <li class="bullet clearfix">
                  <div class="bullet-icon bullet-icon-2">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                  </div>
                  <div class="bullet-content">
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                    <h2>TIME SCHEDULES</h2>
                    <p>MONDAYS TO SATURDAYS FROM 10 AM. TO 9 PM.</p>
                    <p>SUNDAYS AND HOLIDAYS FROM 11 AM. TO 9 PM.</p>
					<?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){  ?>
                    <h2>HORÁRIOS</h2>
                    <p>SEGUNDA A SÁBADO DAS 10:00H ATÉ AS 21:00H.</p>
                    <p>DOMINGO E FERIADOS DAS 11:00H ATÉ AS 21:00H.</p>
					<?php }else{  ?>
                    <h2>horarios</h2>
                    <p>Lunes a sábado de 10:00 a 21:00 hrs.</p>
                    <p>domingo y festivos de 11:00 a 21:00 hrs. </p>
					<?php } ?> 	                  
                  </div>
                </li>
              </ul>
          </div>
            <a href="http://www.parauco.com/" class="btn_inversionistas hvr-float" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/btn_inversionistas.svg" class="img-responsive">
            </a>
        </div> <!-- row -->
      </footer> <!-- footer -->
    </div><!-- container footer -->
    <div class="container">
          <div class="footer_bottom">
          <div class="copy">
              <?php echo date("Y"); ?> © Todos los derechos reservados.
          </div>
          <div class="trip_advisor">
          <!-- <a href="https://www.tripadvisor.cl/Attraction_Review-g294305-d2491922-Reviews-Parque_Arauco-Santiago_Santiago_Metropolitan_Region.html">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/tripadvisor.png"> 
          </a> -->
            
              <div id="TA_socialButtonBubbles464" class="TA_socialButtonBubbles">
                  <ul id="RuQEoXeD" class="TA_links x91SAq">
                      <li id="ErqX32" class="PZPJHn">
                      <a target="_blank" href="https://www.tripadvisor.cl/Attraction_Review-g294305-d2491922-Reviews-Parque_Arauco-Santiago_Santiago_Metropolitan_Region.html"><img src="https://www.tripadvisor.cl/img/cdsi/img2/branding/socialWidget/20x28_green-21693-2.png"/></a>
                      </li>
                  </ul>
              </div>
              <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=464&amp;locationId=2491922&amp;color=green&amp;size=rect&amp;lang=es_CL&amp;display_version=2"></script>
               
          </div> <!-- trip advisor -->
      </div><!-- footer_bottom -->  
    </div>
    <!-- js --> 

<?php wp_footer(); ?>

<script> 
	$(function(){
  var currencies = [
	  
	  <?php
	$categorias = $db->rawQuery("select * from pak_categorias where idioma = $idioma");
	if($categorias){
		foreach ($categorias as $p) {
			
			echo "{ value: '".addslashes($p['nombre_subcategoria'])."', id: '".$p['id_subcategoria']."', tipo: '-', busqueda: 'Cat' },";
		}
	}  	
	$tiendas = $db->rawQuery("select * from pak_tiendas where idioma = $idioma");
	if($tiendas){
		foreach ($tiendas as $t) {
			
			echo "{ value: '". str_replace("'", "",  addslashes($t['nombre']))."', id: '".$t['punto_interes']."', tipo: '".$t['tipo']."', busqueda: 'Tienda' },";
		}
	}    
	  ?>
    
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#input_search_home').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
     // alert(suggestion.busqueda+': '+suggestion.value+ ' - id: '+ suggestion.id);
     
      
      if(suggestion.busqueda=='Cat'){
	      pagina = '<?php bloginfo('url'); ?>/tiendas?catID=';
      }else if(suggestion.busqueda=='Tienda'){
	      if(suggestion.tipo=='0'){
		      pagina = '<?php bloginfo('url'); ?>/tiendas?tiendaID=';
	      }else if(suggestion.tipo=='110'){
		      pagina = '<?php bloginfo('url'); ?>/boulevard-tiendas?tiendaID=';
		  }else if(suggestion.tipo=='119'){
		      pagina = '<?php bloginfo('url'); ?>/distrito-de-lujo/distrito-de-lujo-tienda/?tiendaID=';
		  }else if(suggestion.tipo=='131'){
		      pagina = '<?php bloginfo('url'); ?>/piso-diseno?tiendaID=';
		  }
      }else{
	      
      }
      
	  window.location.href = pagina+suggestion.id;
      
    }
  });
  

}); 

<?php 	
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url,'distrito-de-lujo-tienda') !== false) {
	    $dl = true;
	} else {
	    $dl = false;
	}
	if(isset($_GET['tiendaID']) && !$dl){
?>
    $("#lang_switcher").removeClass('visible-xs visible-sm').css('display', 'none');
    $(".lang, .rrss, .search").hide();
    $("#caja_datos_tienda").css("display", "block");
    $(".close_tienda").css('display','block').show();
    $('body').toggleClass('menu_open');
<?php } ?>

</script>  
  
  </body>
</html>