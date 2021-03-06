<!DOCTYPE html>
<html lang="en">
<head>
<title>BMB</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Jhonatan Shop template">
<meta name="viewport" content="width=device-width, initial-scale=1">



<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">


<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/comun.css">

</head>
<body>


<div class="menu">


	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="productos.html">Productos</a></li>
			<li><a href="acerca.html">Sobre nosotros</a></li>
			<li><a href="contacto.html">Contacto</a></li>

			
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<!-- <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+011 1533840160</div>
		</div>
		-->
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

			</ul>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div style="text-align: center;">
			<img style="max-width: 80px;" src="assets/images/Logo.png" alt="">
		</div>
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="index.html">
					<div class=" d-flex flex-row align-items-center justify-content-start">
						<div class="nombre">BMB cosmetica</div>
					</div>
				</a>	
			</div>
			<div class="hamburger "><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav ">
				<ul class="d-flex flex-row align-items-start justify-content-start ">
					<li><a href="index.html">Home</a></li>
					<li><a href="productos.html">Productos</a></li>
					<li><a href="contacto.html">Contacto</a></li>
					<li><a href="acerca.html">Sobre Nosotros</a></li>					
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search"  style="display: none;">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Buscar " required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>

			</div>
		</div>
	</header>



<?php 
include("correo.php");
?>

	<div class="container" style="padding-top: 200px;">
		<h1 class="text-center" style="color: black;font-size: 2.5rem;margin-bottom: 20px;">Dejamos tus datos para contactarnos</h1>
		<form class="text-center" method="POST">
				<div class="form-group">
					<label for="validation01">Nombre</label>
					<input type="text" class="form-control is-valid" name="nombre" id="validation01" 
						   placeholder="Tu nombre"  required="">
				</div>
				<div class="form-group">
					<label for="validation01">Apellido</label>
					<input type="text" class="form-control is-valid" name="apellido" id="validation01" 
						   placeholder="Tu apellido" required="">
				</div>
			
				<div class="form-group">
					<label for="validation01">Telefono</label>
					<input type="number" class="form-control is-valid" name="telefono" id="validation01" 
						   placeholder="Tu telefono " required="">
				</div>
				<div class="form-group">
					<label for="validation01">Email</label>
					<input type="email" class="form-control is-valid" name="email" id="validation01" 
						   placeholder="Tu email"  required="">
				</div>

				<div class="form-outline">
					<textarea class="form-control is-valid"  id="validation01" rows="4" placeholder="Tu mensaje :)"></textarea>
					<label class="form-label" required="" for="textAreaExample" name="mensaje" >Mensaje</label>
				  </div>



				<button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
			  </form>
		  </form>


		  <h3 class="text-center" style="color: black;padding: 20px;">Ventas por mayor
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, assumenda vitae ipsum corporis commodi libero sapiente temporibus eius earum labore.
			</p>
		</h4>

		</div>

	</div>


	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					
					<!-- About -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div class="footer_logo">
								<a href="#">
									<div class="d-flex flex-row align-items-center justify-content-start">
										<div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
										<div> BMB Cosmetica</div>
									</div>
								</a>		
							</div>
							<div class="footer_about_text">
								<h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, blanditiis.</h4>
								<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
							</div>
						</div>
					</div>

					<!-- Footer Links -->
					<div class="col-lg-4 footer_col">
						<div class="footer_social">
							<div class="footer_title">Contacto</div>
							<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<p style="padding-top: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui accusantium animi labore quam eligendi. Eveniet minima quam sapiente voluptas possimus!</p>
					</div>

					<!-- Footer Contact -->
					<div class="col-lg-4 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Dejanos tu mensaje</div>
							<div class="newsletter">
								<form action="#" id="newsletter_form" class="newsletter_form text-center" >
									<div class="form-group">
										<label for="validation01">Email</label>
										<input type="email" class="form-control is-valid" id="validation01" 
										  placeholder="email"  required>
									</div>								
									<div class="form-outline">
										<textarea class="form-control is-valid"  id="validation01" rows="4" placeholder="Tu mensaje"></textarea>
										<label class="form-label" for="textAreaExample" >Mensaje</label>
									  </div>
									  <button type="submit" class="btn btn-primary">Enviar</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
							<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<nav class="footer_nav ml-md-auto order-md-2 order-1">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="index.html">Home</a></li>
									<li><a href="productos.html">Productos</a></li>
									<li><a href="acerca.html">Sobre Nostros</a></li>
									<li><a href="contacto.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

		

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>