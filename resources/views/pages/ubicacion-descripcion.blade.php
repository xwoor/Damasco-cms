@extends('layouts.pages')
@section('title','Home')
    
@section('content')
{{-- SECCION MAPA --}}
<div class="coantiner bg-05 " id="mapa">
    <div class="movil-mt-150"><p></p> </div>
        <div class="row d-flex justify-content-center ">
            <div class="col-12 col-lg-4 mt-250">
                <img class="wd-100 wow fadeInLeft" data-wow-delay="1s" src="{{ asset('images/img_ubicacion.png')}} ">
                <a target="blank" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7272.984152571697!2d-74.10424832691959!3d4.6189027000008265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9985b27f1a8d%3A0xb2f26604b363b08!2sProyecto+38+Plus!5e0!3m2!1ses-419!2sco!4v1560391126835!5m2!1ses-419!2sco" class="wow fadeInUp"  data-wow-delay="2s">
                    <button>
                        <img class="btn-como" src="{{ asset('images/img_btn.png')}} ">
                    </button>
                </a>
            </div>
            <div class="col-12 col-lg-6 mt-4 mb-4 fadeInRight mt-250"  data-wow-delay="1s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7272.984152571697!2d-74.10424832691959!3d4.6189027000008265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9985b27f1a8d%3A0xb2f26604b363b08!2sProyecto+38+Plus!5e0!3m2!1ses-419!2sco!4v1560391126835!5m2!1ses-419!2sco" 
                 class="mapita" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    {{-- FIN SECCION MAPA --}}
{{-- SLIDER --}}
    <div class="home">
        {{-- IMAGEN SLIDER --}}
    <div class="formulario ">
            <div class="formulario2 wow fadeInUp">
                    <img src=" {{asset('images/web_proyecto.png')}} " alt="">
            </div>
        </div>
    {{-- FIN IMAGEN SLIDER --}}
    <div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">				
                <!-- Slide -->
                <div class="slide">
                    <div class="background_image" style="background-image:url(images/slider/38-PLUS-B2.jpg)"></div>
                </div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/slider/38-PLUS-B1.jpg)"></div>
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
</div> 
{{-- FIN SLIDER --}}
    {{-- NEXT SECTION --}}
    <div class="bg-gray pd-2">
            <div class="container">
                <div class="row">
                    <div class="col wow fadeInLeft">
                        <h3 class="txt-white text-center"><b>PUENTE ARANDA.</b> UNA
                        LOCALIDAD CON <b>TRADICIÓN</b>
                        Y<b> DESARROLLO PALPITANTE</b></h3>
                    </div>
                </div>
            </div>
        </div>
{{-- Galeria --}}
    <div class="container mt-4">
		<div class="row">
			<div class="col-12 col-lg-4 mt-4 wow fadeInLeft" data-wow-delay="0.3s">
				<img class="galeria-hover" src=" {{asset('images/seccion_04.png')}} " alt="">
				<button class="btn btn-primary btn-yellow boton-right wd-100 wow fadeInUp" data-wow-delay="0.5s" >
                    VIAS + INFRAESTRUCTURA + TRANSPORTE
                </button>
			</div>
			<div class="col-12 col-lg-4 mt-4 wow fadeInLeft" data-wow-delay="0.5s">
					<img class="galeria-hover" src=" {{asset('images/seccion_05.png')}} " alt="">
					<button class="btn btn-primary btn-yellow boton-right wd-100 wow fadeInUp" data-wow-delay="0.8s">
                        LUGARES DE INTERES + OCIO + ENTRETENIMIENTO
                    </button>
			</div>
			<div class="col-12 col-lg-4 mt-4 wow fadeInLeft" data-wow-delay="0.8s">
					<img class="galeria-hover" src=" {{asset('images/seccion_06.png')}} " alt="">
					<button class="btn btn-primary btn-yellow boton-right wd-100 wow fadeInUp" data-wow-delay="1.3s">
                            COLEGIOS + UNIVERSIDADES <br>  + SERV. INSTITUCIONALES
                    </button>
			</div>
		</div>
	</div>
{{-- Fin Galeria --}}
@endsection