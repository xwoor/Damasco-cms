@extends('layouts.pages')
@section('title','Home')
    
@section('content')
<div class="formulario ">
        <div class="formulario2">
                <img src=" {{asset('images/precio_img.png')}} " alt="">
        </div>
    </div>
<div class="home">
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">				
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
                </ul>
            </div>
        </div>
        
    </div>
</div> 
    {{-- NEXT SECTION --}}
    <div class="bg-gray pd-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="txt-white"><b>PUENTE ARANDA.</b> UNA</h3>
                        <h3 class="txt-white">LOCALIDAD CON <b>TRADICIÓN</b></h3>
                        <h3 class="txt-white">Y<b> DESARROLLO PALPITANTE</b></h3>
                    </div>
                    <div class="col">
                        <p class="txt-white text-justify">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        </p>
                    </div>
                </div>
            </div>
        </div>
{{-- Galeria --}}
    <div class="container mt-4">
		<div class="row">
			<div class="col-12 col-lg-4 mt-4">
				<img src=" {{asset('images/seccion_04.png')}} " alt="">
				<button class="btn btn-primary btn-yellow boton-right wd-100">
                    VIAS + INFRAESTRUCTURA + TRANSPORTE
                </button>
			</div>
			<div class="col-12 col-lg-4 mt-4">
					<img src=" {{asset('images/seccion_05.png')}} " alt="">
					<button class="btn btn-primary btn-yellow boton-right wd-100">
                        LUGARES DE INTERES + OCIO + ENTRETENIMIENTO
                    </button>
			</div>
			<div class="col-12 col-lg-4 mt-4">
					<img src=" {{asset('images/seccion_06.png')}} " alt="">
					<button class="btn btn-primary btn-yellow boton-right wd-100">
                            COLEGIOS + UNIVERSIDADES <br>  + SERV. INSTITUCIONALES
                    </button>
			</div>
		</div>
	</div>
{{-- Fin Galeria --}}
@endsection