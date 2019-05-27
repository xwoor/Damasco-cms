@extends('layouts.pages')
@section('title','Home')
    
@section('content')
		<div class="formulario ">
			<div class="formulario2">
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
					</ul>
				</div>
			</div>
			
		</div>
	</div> 
{{-- FIN SLIDER --}}
{{-- NEXT SECTION --}}
	<div class="bg-gray pd-2">
		<div class="container">
			<div class="row">
				<div class="col">
					<h3 class="txt-white">UNA <b>VISION CONTEMPORANEA</b></h3>
					<h3 class="txt-white">QUE PROMETE CONVERTIRSE</h3>
					<h3 class="txt-white">EN <b>HITO URBANO</b> DEL SECTOR</h3>
				</div>
				<div class="col">
					<p class="txt-white text-justify">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
							nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem
							ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
					</p>
					<a href="#" target="blank">
						<button class="btn btn-primary boton-right "> DESCRIPCIÓN DEL PROYECTO <i class="fas fa-angle-right"></i></button>
					</a>
				</div>
			</div>
		</div>
	</div>
{{-- Galeria --}}
	<div class="container mt-4">
		<div class="row">
			<div class="col-12 col-lg-4 mt-4">
				<img src=" {{asset('images/seccion_01.png')}} " alt="">
				<button class="btn btn-primary boton-right wd-100">ZONAS COMUNES Y DOTACIONES</button>
			</div>
			<div class="col-12 col-lg-4 mt-4">
					<img src=" {{asset('images/seccion_02.png')}} " alt="">
					<button class="btn btn-primary boton-right wd-100">VER: PLANOS + AREAS + PRECIOS</button>
			</div>
			<div class="col-12 col-lg-4 mt-4">
					<img src=" {{asset('images/seccion_03.png')}} " alt="">
					<button class="btn btn-primary boton-right wd-100">VER: CATALOGO DE ACABADOS</button>
			</div>
		</div>
	</div>
{{-- Fin Galeria --}}
<div class="row">
	<div class="col-12 col-lg-8">
		<img src=" {{asset('images/mapa_ruta.png')}} " class="wd-100">
	</div>
	<div class="col-12 col-lg-4 bg-yellow-dark">
		<h3 class="txt-white text-center mt-4 mb-4">UN EXCELENTE PLUS <br>ES <b>VIVIR CERCA DE TODO</b></h3>
		<div class="txt-white border">
			<h4 class="txt-white"><i class="fas fa-stop"></i> A solo 5 min. de la Zona Universitaria</h4>
			<br>
			<h4 class="txt-white"><i class="fas fa-stop"></i> Múltiples vías de acceso</h4>
			<br>
			<h4 class="txt-white"><i class="fas fa-stop"></i> Cercanía con el centro Histórico y Cultural de la Ciudad</h4>
			<br>
			<h4 class="txt-white"><i class="fas fa-stop"></i> Oficinas de servicios y entidades Publicas y Privadas</h4>
			<br>
			<h4 class="txt-white"><i class="fas fa-stop"></i> Cerca de Bancos y Nuevos Centros Comerciales</h4>
			<br>
			<h4 class="txt-white"><i class="fas fa-stop"></i> Colegios Públicos y Privados en la zona</h4>
		</div >
		<a href="#" target="blank">
			<button class="btn btn-primary mt-4">CONOCE MAS DE SUS BENEFICIOS<i class="fas fa-angle-right"></i></button>
		</a>
	</div>
</div>




{{-- <div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">		
							<!-- Slide -->
							<div class="booking_item">
									<div class="background_image" style="background-image:url(images/seccion_01.png)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_link"><a href="#">ZONAS COMUNES Y DOTACIONES</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/seccion_02.png)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_link"><a href="#">VER: PLANOS + AREAS + PRECIOS</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/seccion_03.png)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_link"><a href="#">VER: CATALOGO DE ACABADOS</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
@endsection