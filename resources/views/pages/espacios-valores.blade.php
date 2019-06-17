@extends('layouts.pages')
@section('title','Home')
    
@section('content')
<div class="formulario ">
        <div class="formulario2 wow fadeInUp">
                <img src=" {{asset('images/precio_img.png')}} " alt="">
        </div>
    </div>
<div class="home">
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">				
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
                        <h3 class="txt-white wow fadeInLeft"><b>PLANTAS GENERALES</b></h3>
                    </div>
                    <div class="col">
                        <p class="txt-white text-justify wow fadeInRight">
                                HAGA CLIC SOBRE CADA PISO <br>
                                PARA VER EL CONTENIDO EN PLANTA
                        </p>
                    </div>
                </div>
            </div>
        </div>

  {{-- MAPA --}}
	<figure id="projectsvg" class="wow slideInUp">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 850" preserveAspectRatio="xMinYMin meet" >
          <!-- set your background image -->
          <image width="1920" height="850" xlink:href="{{asset('images/plantas_01.png')}} " />

          <g class="hover_group" opacity="0">
            <a data-toggle="modal"  data-target="#apt1">
              <rect x="10" y="107" opacity="0.5" fill="#ED891E" width="1810" height="50"></rect>
            </a>
          </g>
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt2">
                  <rect x="10" y="157" opacity="0.5" fill="#ED891E" width="1810" height="79"></rect>
                </a>
            </g>
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt3">
                  <rect x="10" y="236" opacity="0.5" fill="#ED891E" width="1810" height="79"></rect>
                </a>
            </g>
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt4">
                  <rect x="10" y="315" opacity="0.5" fill="#ED891E" width="1810" height="79"></rect>
                </a>
            </g>
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt5">
                  <rect x="10" y="410" opacity="0.5" fill="#ED891E" width="1810" height="163"></rect>
                </a>
            </g>
          
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt6">
                  <rect x="10" y="590" opacity="0.5" fill="#ED891E" width="1810" height="150"></rect>
                </a>
            </g>
          
            </svg>
          </figure>
 {{-- SLIDER APT--}}
 
 @include('modals.modal1')
 @include('modals.modal2')

{{-- APARTAMENTOS --}}
<div class="bg-gray " data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <h3 class="txt-white wow slideInLeft mt-4 mb-4" >APARTAMENTOS</h3>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
      <h4 class="txt-gray mt-4 wow fadeInUp" data-wow-delay="0.7s">3 HABITACIONES</h4>
  </div>
  {{-- 3 HABITACIONES --}}
  <div class="row">
    <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
      <button data-toggle="modal" data-target="#hbt0">
        <img src="{{asset('images/apts/apt_01.jpg')}}">
      </button>
    </div>
    <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
      <button data-toggle="modal" data-target="#hbt1">
      <img src="{{asset('images/apts/apt_02.jpg')}}">
      </button>
    </div>
    <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
      <button data-toggle="modal" data-target="#hbt2">
      <img src="{{asset('images/apts/apt_03.jpg')}}">
      </button>
    </div>
  </div>
  {{-- 2 HABITACIONES --}}
  <div class="row">
      <h4 class="txt-gray mt-4 wow fadeInUp" data-wow-delay="0.7s">2 HABITACIONES</h4>
  </div>
  <div class="row">
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt3">
        <img src="{{asset('images/apts/apt_04.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt4">
        <img src="{{asset('images/apts/apt_05.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt5">
        <img src="{{asset('images/apts/apt_06.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt6">
        <img src="{{asset('images/apts/apt_07.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt7">
        <img src="{{asset('images/apts/apt_08.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt8">
        <img src="{{asset('images/apts/apt_09.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt9">
        <img src="{{asset('images/apts/apt_10.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt10">
        <img src="{{asset('images/apts/apt_11.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt11">
        <img src="{{asset('images/apts/apt_12.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt12">
        <img src="{{asset('images/apts/apt_13.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt13">
        <img src="{{asset('images/apts/apt_14.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt14">
        <img src="{{asset('images/apts/apt_15.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt15">
        <img src="{{asset('images/apts/apt_16.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <button data-toggle="modal" data-target="#hbt16">
        <img src="{{asset('images/apts/apt_17.jpg')}}">
        </button>
      </div>
    </div>
  {{-- APTO TIPO LOFT --}}
  <div class="row">
      <h4 class="txt-gray mt-4 wow fadeInUp" data-wow-delay="0.7s">APTO TIPO LOFT</h4>
  </div>
  <div class="row">
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
          <button data-toggle="modal" data-target="#hbt17">
        <img src="{{asset('images/apts/apt_18.jpg')}}">
          </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
          <button data-toggle="modal" data-target="#hbt18">
        <img src="{{asset('images/apts/apt_19.jpg')}}">
          </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
          <button data-toggle="modal" data-target="#hbt19">
        <img src="{{asset('images/apts/apt_20.jpg')}}">
          </button>
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
          <button data-toggle="modal" data-target="#hbt20">
        <img src="{{asset('images/apts/apt_21.jpg')}}">
          </button>
      </div>
    </div>

  </div>
</div>
{{-- FIN APARTAMENTOS --}}


{{-- MODAL  --}}
@endsection