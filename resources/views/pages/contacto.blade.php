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
@endsection