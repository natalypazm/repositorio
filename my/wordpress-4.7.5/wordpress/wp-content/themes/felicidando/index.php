<?php get_header(); ?>
	<!--<h1><?php the_title(); ?></h1>-->
<div class="header">
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-2" style="display:inline-block;text-align:center">
			<a href=""><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/facebook.png"></a>
			<a href=""><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/twitter.png"></a>
			<a href=""><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/youtube.png"></a>
		</div>
		<div class="col-md-6" style="font-size:34px;text-align:center">¡Ahora tus compras crean oportunidades!</div>
		<div class="col-md-4">
		<a href="#">INGRESA A TU CUENTA</a>
		<a href="#">REGÍSTRATE</a>
		</div>
	</div>
	</div>
</div>
<div class="menu">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/felicidando.png"></div>
			<div class="col-md-9 menu-opciones">
				<a href="#">QUÉ ES FELICIDANDO?</a>
				<a href="#">QUÉ HACEMOS?</a>
				<a href="#">CAMPAÑAS SOCIALES</a>
				<a href="#">CATÁLOGO</a>
				<a href="#">BLOG</a>
				<a href="#">CONTÁCTANOS</a>
			</div>
		</div>
	</div>
</div>
	<div class="muestra">
		<div>
			<img class="d-block img-fluid img-responsive" src="<?php bloginfo('template_directory');?>/img/header.png" alt="First slide">
			<!--<div style="top: 20px;position:relative">
				<p class="texto-muestra"><span style="font-size:126px;color:#ffffff">AHORA</span><br>tus <span>CONSUMOS</span><br>mejorarán miles de <span>VIDAS</span><br>Súmate tú también al club <span>FELICIDANDO</span></p>
      	<button class="boton a boton-header"><a href="#"><img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/">¡REGÍSTRATE!</a></button>
			</div>!-->
      
		</div>
      <img class="d-block img-fluid img-responsive" src="<?php bloginfo('template_directory');?>/img/header.png" alt="Second slide">
      <img class="d-block img-fluid img-responsive" src="<?php bloginfo('template_directory');?>/img/header.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
	
	<script>
		$(document).ready(initPage);

		function initPage()
	{
			$('.muestra').slick(
				{
					autoplay:true,
					arrows:false,
					nextArrow:'.flecha'
				});
	}
	</script>
	<div class="fila3">
		<div class="container">
			<div class="col-md-8"><h3>¡Encuentra una CAMPAÑA que apoyar o elige un producto de nuestro CATÁLOGO,donde tus compras crean sonrisas!</h3></div>
		<div class="col-md-4 botones">
			<button class="boton a"><a href="#">¡CONTÁCTANOS!</a></button><br><br>
			<button class="boton b"><a href="#">¡TU CUENTA!</a></button>
		</div>	
		</div>	
	</div>
	<div class="informacion">
		<div class="container">
			<div class="col-md-4 box1"><h2>PARA TU EMPRESA</h2><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/group.png"><button class="boton a"><a href="#"><h4>MÁS INFORMACIÓN</h4></a></button></div>
			<div class="col-md-4 box2"><h2>PARA TI</h2><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/group.png"><button class="boton a"><a href="#"><h4>MÁS INFORMACIÓN</h4></a></button></div>
			<div class="col-md-4 box3"><h2>PUNTOS FELICIDANDO</h2><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/group.png"><button class="boton a"><a href="#"><h4>MÁS INFORMACIÓN</h4></a></button></div>
		</div>
		
	</div>
	<div class="fila4">
		<div class="container">
			<div class="sociales"><h2>CAMPAÑAS SOCIALES</h2></div>
			<div class="linea"></div>
			<div class="col-md-3">
				<div class="caja social">
				<div class="box-img">
				<div class="text-in"><p>21/100  <br> PTOS <br>FELICIDANDO</p></div>
				<img class="img-responsive imgcamp" style="position: relative" src="<?php bloginfo('template_directory');?>/img/children.jpg"></div><h3 class="banda">EDUCACIÓN</h3><p class="texto-fila4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, nobis ducimus vitae? Ullam quisquam, iste vitae aspernatur quaerat dolorum numquam distinctio nihil impedit, beatae vel quae repellendus ipsam minus, aut! <br><br><button class="boton red"><a href="#">VER MÁS</a></button></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="caja social">
				<div class="box-img">
				<div class="text-in"><p>21/100  <br> PTOS <br>FELICIDANDO</p></div>
				<img class="img-responsive imgcamp" style="position: relative" src="<?php bloginfo('template_directory');?>/img/children.jpg"></div><h3 class="banda">COMUNIDAD</h3><p class="texto-fila4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, nobis ducimus vitae? Ullam quisquam, iste vitae aspernatur quaerat dolorum numquam distinctio nihil impedit, beatae vel quae repellendus ipsam minus, aut! <br><br><button class="boton yellow"><a href="#">VER MÁS</a></button></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="caja social">
				<div class="box-img">
				<div class="text-in"><p>21/100  <br> PTOS <br>FELICIDANDO</p></div>
				<img class="img-responsive imgcamp" style="position: relative" src="<?php bloginfo('template_directory');?>/img/children.jpg"></div><h3 class="banda">EMPRENDIMIENTO</h3><p class="texto-fila4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, nobis ducimus vitae? Ullam quisquam, iste vitae aspernatur quaerat dolorum numquam distinctio nihil impedit, beatae vel quae repellendus ipsam minus, aut! <br><br><button class="boton green"><a href="#">VER MÁS</a></button></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="caja social">
				<div class="box-img">
				<div class="text-in"><p>21/100  <br> PTOS <br>FELICIDANDO</p></div>
				<img class="img-responsive imgcamp" style="position: relative" src="<?php bloginfo('template_directory');?>/img/children.jpg"></div><h3 class="banda">EDUCACIÓN</h3><p class="texto-fila4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, nobis ducimus vitae? Ullam quisquam, iste vitae aspernatur quaerat dolorum numquam distinctio nihil impedit, beatae vel quae repellendus ipsam minus, aut! <br><br><button class="boton purple"><a href="#">VER MÁS</a></button></p>
				</div>
			</div>
			<button class="vertodo" style="margin: auto 40%;"><a href="#"><h3 style="font-weight:bold;margin:10px 0">¡VER TODO!</h3></a></button>
		</div>
	</div>
	<div class="fila5">
		<div class="container">
			<div class="sociales"><h2>CATÁLOGO DE COMPRAS</h2></div>
			<div class="linea"></div>
				<div class="col-md-3">
				<div class="caja"><img class="img-responsive imgcamp" src="<?php bloginfo('template_directory');?>/img/cine.jpg"><h4 class="banda">ENTRADAS PARA 4 EN CINEPLANET</h4><br><br><button class="boton red"><a href="#">¡VER PROMOCIÓN!</a></but
				ton></div>
			</div>
			<div class="col-md-3">
				<div class="caja"><img class="img-responsive imgcamp" src="<?php bloginfo('template_directory');?>/img/cine.jpg"><h4 class="banda">ENTRADAS PARA 4 EN CINEPLANET</h4><br><br><button class="boton yellow"><a href="#">¡VER PROMOCIÓN!</a></button></div>
			</div>
			<div class="col-md-3">
				<div class="caja"><img class="img-responsive imgcamp" src="<?php bloginfo('template_directory');?>/img/cine.jpg"><h4 class="banda">ENTRADAS PARA 4 EN CINEPLANET</h4><br><br><button class="boton green"><a href="#">¡VER PROMOCIÓN!</a></button></div>
			</div>
			<div class="col-md-3">
				<div class="caja"><img class="img-responsive imgcamp" src="<?php bloginfo('template_directory');?>/img/cine.jpg"><h4 class="banda">ENTRADAS PARA 4 EN CINEPLANET</h4><br><br><button class="boton purple"><a href="#">¡VER PROMOCIÓN!</a></button></div>
			</div>
			<button class="vertodo" style="margin: auto 40%;"><a href="#"><h3 style="font-weight:bold;margin:10px 0">¡VER TODO!</h3></a></button>
		</div>
	</div>
	<div class="video">
		<div class="container">
			<h1>Ingresa al fascinante mundo de Felicidando, un sistema <span style="color:#e16c6c">perfecto</span>,<span style="color:#77c496">colaborativo</span> y <span style="color:#edc14b"><br>de apoyo social</span> donde ayudar hace feliz</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jl0_a6WJoAU?ecver=2" width="640" height="360" frameborder="0"allowfullscreen></iframe>
</div>
			</div>
			<button class="vertodo" style="margin: auto 40%;"><a href="#"><h3 style="font-weight:bold;margin:10px 0">¡CONÓCENOS!</h3></a></button>
		</div>
	</div>
	<div class="frase">
		<div class="container-fluid">
			<!--<img class=" img-responsive" src="<?php bloginfo('template_directory');?>/img/exito.jpg">-->
			<h1>"En lo mas alto del cielo <br> estan nuestros suenos, nuestras <br>   esperanzas y nuestra fe" - Felicidando</h1>
		</div>
	</div>

<?php get_footer(); ?>