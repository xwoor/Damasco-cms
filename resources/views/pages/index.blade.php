@extends('layouts.pages')
@section('title','Home')
    
@section('content')
<div class="formulario ">
			<div class="formulario2 mt-200">
					<img src=" {{asset('images/precio_img.png')}} " alt="">
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
{{-- NEXT SECTION --}}
<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">		
							<!-- Slide -->
							<div class="booking_item">
									<div class="background_image" style="background-image:url(images/booking_1.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_link"><a href="#">ZONAS COMUNES Y DOTACIONES</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_2.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_link"><a href="#">VER: PLANOS + AREAS + PRECIOS</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_3.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_link"><a href="#">VER: CATALOGO DE ACABADOS</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- TEST --}}

	<figure id="projectsvg">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1080" preserveAspectRatio="xMinYMin meet" >
	  <!-- set your background image -->
	  <image width="1920" height="1080" xlink:href="http://placehold.it/1920x1080" />
	  <g class="hover_group" opacity="0">
		<a xlink:href="https://example.com/link1.html">
		  <text x="20" y="190" font-size="20">First zone</text>
		  <rect x="10" y="10" opacity="0.2" fill="#FFFFFF" width="1900" height="200"></rect>
		</a>
	  </g>
	  <g class="hover_group" opacity="0">
		<a xlink:href="https://example.com/link2.html">
		  <text x="1230.7" y="952" font-size="20">Second zone</text>
		  <rect x="1081.7" y="507" opacity="0.2" fill="#FFFFFF" width="390.2" height="450"></rect>
		</a>
	  </g>
		</svg>
	  </figure>
@endsection