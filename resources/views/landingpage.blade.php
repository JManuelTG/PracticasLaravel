<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">
	<head>
		<title>Landing Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">
						<h2>hola</h2>
						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major">Hola, Mi nombre es Manuel</h1>
									<p>Soy estudiante de Ingenieria en Computacion, tengo 24 años y actualmente soy estudiante de tiempo completo.</p>
									<ul class="actions">
										<li><a href="#first" class="button primary color1 circle icon solid fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/1.jpg" alt="" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">Esto es una practica escolar</h2>
									<p>Mauris et ligula arcu. Proin dapibus convallis accumsan. Lorem maximus hendrerit orci, sit amet elementum massa hendrerit sed. Donec et ullamcorper ligula. Suspendisse amet potenti. Ut pretium libero eleifend euismod sed tristique. Quisque dictum magna risus, id ultricies justo sagittis vitae. Sed id odio tempor, porttitor elit amet, gravida hendrerit fringilla lorem ipsum dolor.</p>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1">
								<div class="intro joined">
									<h2 class="major">Esto es una practica escolar</h2>
									<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam.</p>
								</div>
								<div class="inner">
									<ul class="grid-icons three connected">
										<li><span class="icon fa-gem"><span class="label">Lorem</span></span></li>
										<li><span class="icon solid fa-camera-retro"><span class="label">Ipsum</span></span></li>
										<li><span class="icon solid fa-cog"><span class="label">Dolor</span></span></li>
										<li><span class="icon solid fa-paper-plane"><span class="label">Sit</span></span></li>
										<li><span class="icon solid fa-chart-bar"><span class="label">Amet</span></span></li>
										<li><span class="icon solid fa-code"><span class="label">Nullam</span></span></li>
									</ul>
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left">
								<div class="content span-5">
									<h2 class="major">Esto es una practica escolar</h2>
									<p>Mauris a cursus velit. Nunc lacinia sollicitudin egestas bibendum, magna dui bibendum ex, sagittis commodo enim risus sed magna nulla. Vestibulum ut consequat velit. Curabitur vitae libero lorem. Quisque iaculis porttitor blandit. Nullam quis sagittis maximus. Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar.</p>
								</div>
								<div class="image filtered tinted" data-position="top right">
									<img src="images/pic03.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel">
								<div class="intro color2">
									<h2 class="major">Esto es una practica escolar</h2>
									<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam.</p>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="images/gallery/fulls/01.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/01.jpg" alt="" /></a>
										<a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/02.jpg" alt="" /></a>
										<a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/03.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/04.jpg" alt="" /></a>
									<div class="group span-4-5">
										<a href="images/gallery/fulls/05.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/05.jpg" alt="" /></a>
										<a href="images/gallery/fulls/06.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/06.jpg" alt="" /></a>
										<a href="images/gallery/fulls/07.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/07.jpg" alt="" /></a>
										<a href="images/gallery/fulls/08.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/08.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/09.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="intro color4">
									<h2 class="major">Contacto</h2>
									<p>Si necesitas contactarme llena este formulario.</p>
								</div>
								<div class="inner columns divided">
									<div class="span-3-25">
										<form method="post" action="/recibe_form_contacto">
											@csrf
											<div class="fields">
												<div class="field half">
													<label for="nombre">Nombre</label>
													<input type="text" name="nombre" id="nombre" value="{{ old('nombre')}}"/>
													@error('nombre')
														<i>{{ $message }}</i>
													@enderror
												</div>
												<div class="field half">
													<label for="correo">Correo</label>
													<input type="email" name="correo" id="correo" value="{{ old('correo')}}" />
													@error('correo')
														<i>{{ $message }}</i>
													@enderror
												</div>
												<div class="field">
													<label for="mensaje">Mensaje</label>
													<textarea name="mensaje" id="mensaje" rows="4"> {{ old('mensaje')}} </textarea>
													@error('mensaje')
														<i>{{ $message }}</i>
													@enderror
												</div>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="button primary" /></li>
											</ul>
										</form>
									</div>
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon brands fa-twitter"><a href="#">@untitled-tld</a></li>
											<li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled</a></li>
											<li class="icon brands fa-snapchat-ghost"><a href="#">@untitled-tld</a></li>
											<li class="icon brands fa-instagram"><a href="#">@untitled-tld</a></li>
											<li class="icon brands fa-medium-m"><a href="#">medium.com/untitled</a></li>
										</ul>
									</div>
								</div>
							</section>


						<!-- Copyright -->
							<div class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
		
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/browser.min.js') }}"></script>
			<script src="{{ asset('js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>