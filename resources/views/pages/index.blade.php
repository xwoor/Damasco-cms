@extends('layouts.pages')
@section('title','Home')
    
@section('content')
		<div class="formulario ">
			<div class="formulario2 wow fadeInUp">
					<img src=" {{asset('images/precio_img.png')}} " alt="">
			</div>
		</div>
{{-- SLIDER --}}
	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B1.jpg)"></div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B2.jpg)"></div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B3.jpg)"></div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B4.jpg)"></div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B5.jpg)"></div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B6.jpg)"></div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B7.jpg)"></div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B8.jpg)"></div>
				</div>
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/BANNER-ACABADOS.jpg)"></div>
				</div>
			</div>
			
			<!-- Home Slider Dots -->
			<div class="home_slider_dots_container">
				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
						<li class="home_slider_custom_dot active"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
					</ul>
				</div>
			</div>
			<!-- Home Slider Dots -->
			
		</div>
	</div> 
{{-- FIN SLIDER --}}
{{-- NEXT SECTION --}}
	<div class="bg-gray pd-2">
		<div class="container">
			<div class="row">
				<div class="col wow slideInLeft">
					<h3 class="txt-white">UNA <b>VISION CONTEMPORANEA</b></h3>
					<h3 class="txt-white">QUE PROMETE CONVERTIRSE</h3>
					<h3 class="txt-white">EN <b>HITO URBANO</b> DEL SECTOR</h3>
				</div>
				<div class="col">
					<p class="txt-white text-justify lh-15 wow slideInRight">
						Un proyecto innovador que hace parte de la Zona de Renovación Urbana de la Capital con cercanía a importantes vías (Cra 30/Cll 13) y fácil acceso al sistema integrado de transporte. Cuenta con 60 Apartamentos, 8 Locales Comerciales y Amplias Zonas Comunes. Ofrecemos el mejor precio por m2 del sector.
					</p>
					<a href="/test-ubicacion-descripcion" target="blank">
						<button class="btn btn-primary boton-right wow fadeInRight " data-wow-delay="0.5s"> 
							DESCRIPCIÓN DEL PROYECTO <i class="fas fa-angle-right"></i></button>
					</a>
				</div>
			</div>
		</div>
	</div>
{{-- Galeria --}}
	<div class="container ">
		<div class="row">
			<div class="col-12 col-lg-4 mt-4">
				<img class="galeria-hover wow fadeInLeft" data-wow-delay="0.5s" src=" {{asset('images/seccion_01.png')}} " alt="">
				<a href="/test-espacios-valores">
					<button class="btn btn-primary boton-right wd-100 wow fadeInUp" data-wow-delay="0.8s">ZONAS COMUNES Y DOTACIONES</button>
				</a>
			</div>
			<div class="col-12 col-lg-4 mt-4">
				<img class="galeria-hover wow fadeInLeft" data-wow-delay="0.8s" src=" {{asset('images/seccion_02.png')}} " alt="">
				<a href="/test-espacios-valores#apartamentos">
					<button class="btn btn-primary boton-right wd-100 wow fadeInUp" data-wow-delay="1s">VER: PLANOS + AREAS + PRECIOS</button>
				</a>
			</div>
			<div class="col-12 col-lg-4 mt-4">
				<img class="galeria-hover wow fadeInLeft" data-wow-delay="1s" src=" {{asset('images/seccion_03.png')}} " alt="">
				<a href="/test-catalogo-acabados">
					<button class="btn btn-primary boton-right wd-100 wow fadeInUp" data-wow-delay="1.3s">VER: CATALOGO DE ACABADOS</button>
				</a>
			</div>
		</div>
	</div>
{{-- MAPA --}}
<div class="row mt-4">
	<div class="col-12 col-lg-8" style="padding:0px;">
		<a href="/test-ubicacion-descripcion#mapa">
			<img src=" {{asset('images/mapa_ruta.png')}} " class="wd-100">
		</a>
	</div>
	<div class="col-12 col-lg-4 bg-yellow-dark">
		<div class="d-flex justify-content-center text-justify">
			<h2 class="txt-white text-left mt-4 mb-4 wow fadeInDown">UN EXCELENTE PLUS <br>ES <b>VIVIR CERCA DE TODO</b></h2>
		</div>
		<h4 class="col-12 col-lg-12 d-flex justify-content-center text-center mt-2 mb-4 txt-white wow fadeInLeft">
			SALA DE VENTAS: Carrera 38 entreCalles 12 y 12a Puente Aranda
		</h4>
	
		<div class="txt-white border">
			<h3 class="txt-white wow fadeInRight"><i class="fas fa-stop wow fadeInLeft" data-wow-delay="0.5s"></i> A solo 5 min. de la Zona Universitaria</h3>
			<br>
			<h3 class="txt-white wow fadeInRight"><i class="fas fa-stop wow fadeInLeft" data-wow-delay="0.5s"></i> Múltiples vías de acceso</h3>
			<br>
			<h3 class="txt-white wow fadeInRight"><i class="fas fa-stop wow fadeInLeft" data-wow-delay="0.5s"></i> Cercanía con el centro Histórico y Cultural de la Ciudad</h3>
			<br>
			<h3 class="txt-white wow fadeInRight"><i class="fas fa-stop wow fadeInLeft" data-wow-delay="0.5s"></i> Oficinas de servicios y entidades Publicas y Privadas</h3>
			<br>
			<h3 class="txt-white wow fadeInRight"><i class="fas fa-stop wow fadeInLeft" data-wow-delay="0.5s"></i> Cerca de Bancos y Nuevos Centros Comerciales</h3>
			<br>
			<h3 class="txt-white wow fadeInRight"><i class="fas fa-stop wow fadeInLeft" data-wow-delay="0.5s"></i> Colegios Públicos y Privados en la zona</h3>
		</div >
		<a href="#" target="blank">
			<button class="btn btn-primary mt-4 wow fadeInDown" data-wow-delay="0.5s">CONOCE MAS DE SUS BENEFICIOS<i class="fas fa-angle-right"></i></button>
		</a>
	</div>
</div>
@endsection