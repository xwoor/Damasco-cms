@extends('layouts.pages')
@section('title','Espacio + Valores')
    
@section('content')
  {{-- MAPA --}} 
  <div class="bg-gray">
            {{-- PLANTAS GENERALES --}}
            <div class=" pd-2 mt-110">
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
            {{-- FIN PLANTAS GENERALES --}}
  </div>
  <div class="container-fluid mt-4 mb-4 ">
    <div class="row">
      <div class="col-4">
        <button>
          <a data-toggle="modal"  data-target="#apt1">
            <img src="{{ asset('images/plantas_tipo/plantas_terraza.jpg')}}">
          </a>
        </button>
      </div>
      <div class="col-4">
          <button>
              <a data-toggle="modal"  data-target="#apt2">
      <img src="{{ asset('images/plantas_tipo/plantas_piso_tipo.jpg')}}">
            </a>
          </button>
      </div>
      <div class="col-4">
          <button>
              <a data-toggle="modal"  data-target="#apt3">
      <img src="{{ asset('images/plantas_tipo/plantas_piso_2.jpg')}}">
        </a>
      </button>
      </div>
    </div>
    <div class="row mt-4 d-flex justify-content-center">
      </a>
    </button>
      <div class="col-4">
          <button>
              <a data-toggle="modal"  data-target="#apt4">
        <img src="{{ asset('images/plantas_tipo/plantas_piso_1.jpg')}}">
      </a>
    </button>
        </div>
        <div class="col-4">
            <button>
                <a data-toggle="modal"  data-target="#apt5">
        <img src="{{ asset('images/plantas_tipo/plantas_sotano.jpg')}}">
      </a>
    </button>
        </div>
      </div>
  </div>
	
{{-- SLIDER APT--}}

<div class="home">
    <div class="formulario ">
        <div class="formulario2 wow fadeInUp">
                <img src=" {{asset('images/precio_img.png')}} " alt="">
        </div>
    </div>
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">				
          <!-- Slide -->
          <div class="slide">
            <div class="background_image" style="background-image:url(images/slider/38-PLUS-B3.jpg)"></div>
          </div>
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
  {{-- NEXT SECTION --}}


{{-- APARTAMENTOS --}}
<div id="apartamentos" class="bg-gray " data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <h3 class="txt-white wow slideInLeft mt-4 mb-4 ml-3" >APARTAMENTOS</h3>
    </div>
  </div>
</div>
<div class="container-fluid ">
  <div class="row">
      <h4 class="txt-gray mt-4 wow fadeInUp ml-3" data-wow-delay="0.7s">3 HABITACIONES</h4>
  </div>
  {{-- 3 HABITACIONES --}}
  <div class="row">
    <div class="col-3 wow slideInUp mt-3">
      <button data-toggle="modal" data-target="#hbt0">
        <img src="{{asset('images/apts/apt_01.jpg')}}">
      </button>
    </div>
    <div class="col-3 wow slideInUp mt-3">
      <button data-toggle="modal" data-target="#hbt1">
      <img src="{{asset('images/apts/apt_02.jpg')}}">
      </button>
    </div>
    <div class="col-3 wow slideInUp mt-3">
      <button data-toggle="modal" data-target="#hbt2">
      <img src="{{asset('images/apts/apt_03.jpg')}}">
      </button>
    </div>
  </div>
  {{-- 2 HABITACIONES --}}
  <div class="row">
      <h4 class="txt-gray mt-4 wow fadeInUp ml-3" data-wow-delay="0.7s">2 HABITACIONES</h4>
  </div>
  <div class="row">
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt3">
        <img src="{{asset('images/apts/apt_04.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt4">
        <img src="{{asset('images/apts/apt_05.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt5">
        <img src="{{asset('images/apts/apt_06.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt6">
        <img src="{{asset('images/apts/apt_07.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt7">
        <img src="{{asset('images/apts/apt_08.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt8">
        <img src="{{asset('images/apts/apt_09.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt9">
        <img src="{{asset('images/apts/apt_10.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt10">
        <img src="{{asset('images/apts/apt_11.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt11">
        <img src="{{asset('images/apts/apt_12.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt12">
        <img src="{{asset('images/apts/apt_13.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt13">
        <img src="{{asset('images/apts/apt_14.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt14">
        <img src="{{asset('images/apts/apt_15.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt15">
        <img src="{{asset('images/apts/apt_16.jpg')}}">
        </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
        <button data-toggle="modal" data-target="#hbt16">
        <img src="{{asset('images/apts/apt_17.jpg')}}">
        </button>
      </div>
    </div>
  {{-- APTO TIPO LOFT --}}
  <div class="row">
      <h4 class="txt-gray mt-4 wow fadeInUp ml-3" data-wow-delay="0.7s">APTO TIPO LOFT</h4>
  </div>
  <div class="row">
      <div class="col-3 wow slideInUp mt-3">
          <button data-toggle="modal" data-target="#hbt17">
        <img src="{{asset('images/apts/apt_18.jpg')}}">
          </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
          <button data-toggle="modal" data-target="#hbt18">
        <img src="{{asset('images/apts/apt_19.jpg')}}">
          </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
          <button data-toggle="modal" data-target="#hbt19">
        <img src="{{asset('images/apts/apt_20.jpg')}}">
          </button>
      </div>
      <div class="col-3 wow slideInUp mt-3">
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