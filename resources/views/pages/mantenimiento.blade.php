@extends('layouts.mantenimiento')
@section('title', 'Inicio')
    
@section('content')
<div class="formulario">
        <p class="txt-white pd-2 text-justify">
			Es la <b> OPORTUNIDAD DE INVERTIR</b> en un proyecto innovador, con multiples beneficios y al <b> MEJOR PRECIO POR m2</b> de la zona. Una compra inteligente con <b>amplio plazo</b> para pago de cuota inicial. Escríbenos y te contacteramos lo mas pronto posible.
		</p>
			<form action="/mail" method="POST" class="form">
				@csrf
				<div class="form-group">
				  <label for="">NOMBRE</label>
				  <input type="text" class="form-control" name="nombre" required>
				</div>
				<div class="form-group">
				  <label for="">CORREO</label>
				  <input type="email" class="form-control" name="email" required>
				</div>

				<div class="form-group">
				  <label for="">INTERESES</label>
				  <select class="form-control" name="intereses" >
					<option name="opt1">LOCALES COMERCIALES</option>
					<option name="opt2">APARTAESTUDIOS - LOFTS</option>
					<option name="opt3">APARTAMENTO 2 ALCOBAS</option>
					<option name="opt4">APARTAMENTO 3 ALCOBAS</option>
				  </select>
				</div>

				<div class="form-group">
				  <label for="">N CELULAR</label>
				  <input type="text" class="form-control" name="celular" required>
				</div>
				<div class="form-group">
				  <label for="">MENSAJE</label>
				  <textarea class="form-control" name="mensaje" rows="2"></textarea>
				</div>
				<button type="submit" class="btn btn-primary boton-right">Enviar <i class="fas fa-angle-right"></i></button>

			</form>
			<div class="formulario2">
					<p class="txt-white pd-2 text-justify">
						APTOS. DESDE <br>	
						$ <b>157’</b>200.000 A $ 321’932.000 <br>
						ÁREA CONSTRUIDA DESDE <br>
						39.30 m2 A 78.52 m2							
					</p>
			</div>
		</div>
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
					</ul>
				</div>
			</div>
			
		</div>
	</div> 
	{{-- NEXT SECTION --}}
	<div class=" bg-gray pd-2 txt-white">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-12">
					<h4 class="txt-white text-center">
						(+57) 320 918 37 59
					</h4>
				</div>
				<div class="col-md-3 col-xs-12">
					<h4 class="txt-white text-center">
						www.proyectosdamasco.com
					</h4>
				</div>
				<div class="col-md-3 col-xs-12">
					<h4 class="txt-white text-center">
						info@proyectosdamasco.com
					</h4>
				</div>
			</div>

		</div>
	</div>
	<div class="">
		<a href="images/portafolio/portafolio.pdf" target="blank">
			<button class="btn btn-primary boton-right mtn"> DESCARGA EL PORTAFOLIO <i class="fas fa-angle-right"></i></button>
		</a>
	</div>
	<div class="bg-gray-light">
		<div class="container">
			<div class="row ">
				<div class="col-4 col-lg-2">
					<img src="{{ asset('images/EXPORTS_lobby.png')}}" alt="">
				</div>
				<div class="col-4 col-lg-2">
					<img src="{{ asset('images/EXPORTS_salon.png')}}" alt="">
				</div>
				<div class="col-4 col-lg-2">
					<img src="{{ asset('images/EXPORTS_skyroof.png')}}" alt="">
				</div>
				<div class="col-4 col-lg-2">
					<img src="{{ asset('images/EXPORTS_terraza.png')}}" alt="">
				</div>
				<div class="col-4 col-lg-2">
					<img src="{{ asset('images/EXPORTS_circuito.png')}}" alt="">
				</div>
				<div class="col-4 col-lg-2">
					<img src="{{ asset('images/EXPORTS_biogym.png')}}" alt="">
				</div>
			</div>	
		</div>
	</div>
	<br>
	<h3 class="text-center tex-gray"><b>38 PLUS - PROYECTO INMOBILIARIO</b></h3>
					
@endsection