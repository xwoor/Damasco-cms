@extends('layouts.mantenimiento')
@section('title', 'Inicio')
    
@section('content')
<div class="formulario">
			<div class="formulario2">
		@if(session('mensaje'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong> {{ session('mensaje')}}
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  			</button>
			</div>
		@endif
					<img src=" {{asset('images/precio_img.png')}} " class="wow fadeInUp">
					<div class="formulario-boton">
						<button  data-toggle="modal" data-target="#exampleModal" class="wow fadeInLeft"
						class="wow fadeInLeft" data-wow-delay="0.5s">
							<img  width="100%" src=" {{asset('images/boton_contactenos.png')}} " >
						</button>
						<a href="images/portafolio/portafolio.pdf" target="blank">
							<button class="mt-2 wow fadeInLeft" data-wow-delay="0.8s" >
								<img  width="100%" src=" {{asset('images/boton_portafolio.png')}} " >
							</button>
						</a>
					</div>
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
			
		</div>
	</div> 
	{{-- NEXT SECTION --}}

	<div class=" bg-gray pd-2  txt-white ">
		<div class="container">
			<div class="row wow fadeInUp" data-wow-delay="0.5s" >
				<div class="col-md-3 col-xs-12">
					<h4 class="txt-white text-center">
						(+57) 320 918 37 59
					</h4>
				</div>
				<div class="col-md-3 col-xs-12">
					<h4 class="txt-white text-center">
						SALA DE VENTAS: Carrera 38 entreCalles 12 y 12a Puente Aranda
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
	<div class="bg-gray-light">
		<div class="container">
			<div class="row  wow fadeInDown" data-wow-delay="0.8s">
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
	<h3 class="text-center tex-gray wow fadeInUp" data-wow-delay="0.8s"><b>38 PLUS - PROYECTO INMOBILIARIO</b></h3>
	<div class="container">
	<div class="row mt-4 wow fadeInLeft" data-wow-delay="1s">
		<div class="col-3 col-lg-2 mt-4">
			<img src=" {{asset('images/clientes_img__07.png')}} ">
		</div>
		<div class="col-3 col-lg-2 mt-4">
			<img src=" {{asset('images/clientes_img_01.png')}} ">
		</div>
		<div class="col-3 col-lg-2 mt-4">
			<img src=" {{asset('images/clientes_img_02.png')}} ">
		</div>
		<div class="col-3 col-lg-2 mt-4">
			<img src=" {{asset('images/clientes_img_03.png')}} ">
		</div>
		<div class="col-3 col-lg-2 mt-4">
			<img src=" {{asset('images/clientes_img_04.png')}} ">
		</div>
		<div class="col-3 col-lg-2 mt-4">
				<img src=" {{asset('images/clientes_img_05.png')}} ">
			<img src=" {{asset('images/clientes_img_06.png')}} ">
		</div>
	</div>
	</div>	
{{-- Modal --}}
<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close txt-white" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  {{-- MODAL CONTENT --}}
		  <div class="row">
			  <div class="col-12 col-lg-6">
				<p class="txt-white pd-2 text-justify">
					Es la <b> OPORTUNIDAD DE INVERTIR</b> 
					en un proyecto innovador, con multiples beneficios y al 
					<b> MEJOR PRECIO POR m2</b> de la zona. Una compra inteligente con 
					<b>amplio plazo</b> 
					para pago de cuota inicial. Escríbenos y te contactaremos lo más pronto posible.
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
						  <label for="">Nº  CELULAR</label>
						  <input type="text" class="form-control" name="celular" required>
						</div>
						<div class="form-group">
						  <label for="">MENSAJE</label>
						  <textarea class="form-control" name="mensaje" rows="2"></textarea>
						</div>
						<button type="submit" class="btn btn-primary boton-right">Enviar <i class="fas fa-angle-right"></i></button>
		
					</form>
			  </div>
			  <div class="col-12 col-lg-6">
			  <img src=" {{ asset('images/mapa_mapa.png') }}">
			  </div>
		  </div>
		  
		  {{-- FIN MODAL CONTENT --}}
		</div>
	  </div>
	</div>
  </div>
{{-- Fin Modal --}}


@endsection