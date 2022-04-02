<!DOCTYPE HTML>
<html>
	<head>
		<title>El Mundo y Sus Lugares</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="images/mundo.png" type="image/x-icon">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html"><strong>Nuestro Mundo</strong> & sus lugares Maravillosos</a></h1>
						<nav>
							<ul>
								<li><a href="{{Route('index')}}" class="icon solid fa-info-circle">Inicio</a></li>
								<li><a href="#footer" class="icon solid fa-info-circle">Sobre Nosotros</a></li>
								<li><a href="{{Route('Vista1')}}" class="icon solid fa-info-circle">CatFacts</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
				
					<div id="main">
						@foreach ($paisajes as $paisaje)
							<article class="thumb">
								<a href="{{$paisaje->Imagen}}" class="image"><img src="{{$paisaje->Imagen2}}" alt="" /></a>
								<h2>{{$paisaje->Lugar}}</h2>
								<p>{{$paisaje->Descripcion}}</p>
								
							</article>
						@endforeach
					</div>
			
					

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<h2>El Mundo y sus Paisajes</h2>
									<p>
										El concepto de paisaje se utiliza de manera diferente por varios campos de estudio, aunque todos los usos del término llevan implícita la existencia de un sujeto observador y de un objeto observado, del que se destacan fundamentalmente sus cualidades visuales, espaciales.
									</p>
								</section>
								<section>
									<h2>SIGUEME EN MIS REDES...</h2>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
									</ul>
								</section>
								
							</div>
							<div>
								<section>
									<h2>ENVIA SUGERENCIAS</h2>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<input type="text" name="name" id="name" placeholder="Nombre" />
											</div>
											<div class="field half">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
											<div class="field">
												<textarea name="message" id="message" rows="4" placeholder="Mensaje"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Enviar" class="primary" /></li>
											<li><input type="reset" value="Limpiar" /></li>
										</ul>
									</form>
								</section>
							</div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>