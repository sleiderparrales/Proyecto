<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:ingreso.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
	
<!DOCTYPE html>
	
<html>
<head>
<title>ABG_Repository</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pasta Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>

<!-- //js -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					    <a class="customer5 href="index.html"><i class="customer5" aria-hidden="true"></i><span>____</span>_____</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							
							<li class="hvr-bounce-to-bottom"><a href="#archivos">Archivos</a></li>
							<li class="hvr-bounce-to-bottom"><a href="#contactos">Contactos</a></li>
					        <li><a href="">Bienvenido <strong><font color='white'><?php echo $_SESSION['user'];?></font></strong> </a></li>
							<li class="hvr-bounce-to-bottom"><a href="desconectar.php">Salir</a></li>
							
						</ul>
					</div><!-- /navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
			<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<div class="baner-inf">
								<h1>Hola!</h1>
								<p>Facil y sensillo de usar</p>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info1">
							<div class="baner-inf">
								<h1>ABG_Repository</h1>
								<p>Ahorras tiempo al buscar</p>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-info2">
							<div class="baner-inf">
								<h1>Es ideal</h1>
								<p>Orden de tus archivos</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			
			<section id="archivos">
		<div class="banner-bottom-grids">
			<div class="container">
				<div class="col-md-3 banner-bottom-grid">
					<div class="customer1"  >
						<h4></h4>
						<p><span></span></p>
						<div class="clearfix"> </div>
					</div>
					<p class="debitis">Agrega tus documentos de una manera facil y ordenada.</p>
					<div class="more">
						<a href="agregar.php">AGREGAR</a>
					</div>
				</div>
				<div class="col-md-3 banner-bottom-grid">
					<div class="customer2">
						<h4></h4>
						<p><span></span></p>
						<div class="clearfix"> </div>
					</div>
					<p class="debitis">Buscalos de manera rapida y sencilla mediante filtros de busquedas</p>
					<div class="more">
						<a href="single.html">BUSCAR</a>
					</div>
				</div>
				<div class="col-md-3 banner-bottom-grid">
					<div class="customer3">
						<h4></h4>
						<p><span></span></p>
						<div class="clearfix"> </div>
					</div>
					<p class="debitis">Edita tus documentos y actualiza la informacion</p>
					<div class="more">
						<a href="single.html">EDITAR</a>
					</div>
				</div>
				<div class="col-md-3 banner-bottom-grid">
					<div class="customer4">
						<h4></h4>
						<p><span></span></p>
						<div class="clearfix"> </div>
					</div>
					<p class="debitis">Elima el documento que quiereas con solo un clic</p>
					<div class="more">
						<a href="single.html">ELIMINAR</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		 </section>
	</div>
	   
<!-- //banner -->
<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		
	</div>
<!-- //banner-bottom1 -->


<!-- customer -->
	<div class="customer">
		<div class="container">
			<h3>Organiza tus documentos fisicos</h3>
			<div class="customer-grids">
				<ul id="flexiselDemo1">			
					<li>
						<div class="customer-grid">
							<p> Montañas de papeles. Literalmente. No solo en el archivo, Montañas de papeles en su despacho. En las mesas. En las estanterías. ¡En el suelo! , pongamos, una media de 10 folios por documento, es decir, unos 60.000 folios “almacenados”, solo en su despacho debe haber unas 20 montañas de papeles de 40cm de altura. Digamos unos 80.ooo folios.!folios completamente desordenados!

Si yo fuera él, tiraría a la basura. Archivalos digitalmete y librate de esas montañas de paepeles</p>
							<h4>John Smith <span>Manager</span></h4>
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p>  La respuesta es evidente: hay que utilizar este programa de gestión documental que te permita almacenar todos esos documentos en una estructura sencilla, segura y, sobre todo, con facilidades de búsqueda.</p>
							<h4>Micheal Robert <span>Head Cook</span></h4>
						</div>
					</li>
					<li>
						<div class="customer-grid">
							<p> Este software soluciona muy bien los dos problemas de la gestión documental. Primero, sin duda primero en el tiempo, el problema de manejar miles de documentos en papel. Es un problema “físico”, ocupa espacio, se llenan de polvo, manejalos es complicado y lento. Encontrar algo es muy laborioso, si es que lo encuentras. La solución, por supuesto, es escanearlo todo. O, mejor aún, trabajar directamente con los documentos digitales. </p>
							<h4>Williumson <span>Ass Manager</span></h4>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
		</div>
	</div>
<!-- //customer -->
<!-- //MAPA -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15957.07737131194!2d--0.97415404!3d-80.70200073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902be6a9e440988b%3A0x9403b825a96f98ba!2sManta%2C+Ecuador!5e0!3m2!1ses!2ses!4v1502319120143" width="2000" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

<!-- //MAPA -->
<!--- footer --->
  <section id="contactos">
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3>Quienes somos</h3>
					<p>Somos estudiantes de la facultad de ciencias informatica de la Universidad Laica Eloy Alfaro de Manabi con objetivos de poder mejorar cada dia y poder ayudar a solucionar problemas tecnicos.</p>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>Contactos</h3>
					
				</div>
				<div class="col-md-3 footer-grid">
					<h3>Sleider Parrales</h3>
					<p>Emprendedor y Optimista</p>
					<div class="footer-grid-address">
						<p>Tel:0991293829</p>
						<p>Fax: 1234 568</p>
						<p>Email: <a class="email-link" href="mailto:info@example.com">parrales819@gmail.com</a></p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>Vinces Zamora</h3>
					<p>Emprendedor y Optimista</p>
					<div class="footer-grid-address">
						<p>Tel:0989765674</p>
						<p>Fax: 1234 568</p>
						<p>Email: <a class="email-link" href="mailto:info@example.com">Vinces@gmail.com</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	 </section>
	<div class="clear"> </div>
	<div class="copy-right">
		<p>Copyright © Desarrollado por: Vinces Zamora & Sleider Parrales</p>
	</div>

<!--- //footer --->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
		 <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
<!-- //for bootstrap working -->
</body>
</html>