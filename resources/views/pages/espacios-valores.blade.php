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
            <a data-toggle="modal" data-target="#apt1" >
              <rect x="10" y="107" opacity="0.5" fill="#ED891E" width="1810" height="50"></rect>
            </a>
          </g>
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt1">
                  <rect x="10" y="157" opacity="0.5" fill="#ED891E" width="1810" height="79"></rect>
                </a>
            </g>
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt1">
                  <rect x="10" y="236" opacity="0.5" fill="#ED891E" width="1810" height="79"></rect>
                </a>
            </g>
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt1">
                  <rect x="10" y="315" opacity="0.5" fill="#ED891E" width="1810" height="79"></rect>
                </a>
            </g>
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt1">
                  <rect x="10" y="410" opacity="0.5" fill="#ED891E" width="1810" height="163"></rect>
                </a>
            </g>
          
          <g class="hover_group" opacity="0">
                <a data-toggle="modal" data-target="#apt1">
                  <rect x="10" y="590" opacity="0.5" fill="#ED891E" width="1810" height="150"></rect>
                </a>
            </g>
          
            </svg>
          </figure>
 {{-- SLIDER APT--}}
 {{-- MODAL TERRAZA --}}
 <div class="modal fade" id="apt1" tabindex="-1" role="dialog" aria-labelledby="apt1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-zonas" role="document">
          <div class="modal-content modal-content2">
            <div class="modal-header bg-gray">
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="txt-yellow">x</span>
              </button>
            </div>
            <div class="modal-body modal-body2">
                    <div class="slider">
                            <input type="radio" name="slide_switch" id="id1" checked="checked"/>
                            <label for="id1">
                                <img src="{{asset('images/plantas_tipo/img_parqueadero.jpg')}}" width="100"/>
                            </label>
                            <img src="{{asset('images/plantas_tipo/img_parqueadero.jpg')}}"/>
                      
                            <input type="radio" name="slide_switch" id="id2" />
                            <label for="id2">
                                <img src="{{asset('images/plantas_tipo/img_primer_piso.jpg')}}" width="100"/>
                            </label>
                            <img src="{{asset('images/plantas_tipo/img_primer_piso.jpg')}}"/>
                            
                            <input type="radio" name="slide_switch" id="id3"/>
                            <label for="id3">
                                <img src="{{asset('images/plantas_tipo/img_piso_2.jpg')}}" width="100"/>
                            </label>
                            <img src="{{asset('images/plantas_tipo/img_piso_2.jpg')}}"/>
                            
                            <input type="radio" name="slide_switch" id="id4"/>
                            <label for="id4">
                                <img src="{{asset('images/plantas_tipo/img_piso_tipo.jpg')}}" width="100"/>
                            </label>
                            <img src="{{asset('images/plantas_tipo/img_piso_tipo.jpg')}}"/>
                            
                            <input type="radio" name="slide_switch" id="id5"/>
                            <label for="id5">
                                <img src="{{asset('images/plantas_tipo/img_terraza_planta.jpg')}}" width="100"/>
                            </label>
                            <img src="{{asset('images/plantas_tipo/img_terraza_planta.jpg')}}"/>
                        </div>
                              {{-- FIN SILIDER APT --}}
            </div>
          </div>
        </div>
      </div>

{{-- APARTAMENTOS --}}
<div class="bg-gray " data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <h3 class="txt-white wow slideInLeft" >APARTAMENTOS</h3>
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
      <img src="{{asset('images/apts/apt_01.jpg')}}">
    </div>
    <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
      <img src="{{asset('images/apts/apt_02.jpg')}}">
    </div>
    <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
      <img src="{{asset('images/apts/apt_03.jpg')}}">
    </div>
  </div>
  {{-- 2 HABITACIONES --}}
  <div class="row">
      <h4 class="txt-gray mt-4 wow fadeInUp" data-wow-delay="0.7s">2 HABITACIONES</h4>
  </div>
  <div class="row">
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_04.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_05.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_06.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_07.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_08.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_09.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_10.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_11.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_12.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_13.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_14.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_15.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_16.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_17.jpg')}}">
      </div>
    </div>
  {{-- APTO TIPO LOFT --}}
  <div class="row">
      <h4 class="txt-gray mt-4 wow fadeInUp" data-wow-delay="0.7s">APTO TIPO LOFT</h4>
  </div>
  <div class="row">
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_18.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_19.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_20.jpg')}}">
      </div>
      <div class="col-3 wow slideInUp mt-3" data-wow-delay="1s">
        <img src="{{asset('images/apts/apt_21.jpg')}}">
      </div>
    </div>

  </div>
</div>
{{-- FIN APARTAMENTOS --}}



@endsection