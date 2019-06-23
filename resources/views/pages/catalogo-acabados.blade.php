@extends('layouts.pages')
@section('title','Home')
    
@section('content')

<div class="formulario ">
        <div class="formulario3">
                <img src=" {{asset('images/precio_img.png')}} " alt="">
        </div>
    </div>
<div class="home">
        <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">				
                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url(images/acabados/SLIDE-ACABADOS-1.jpg)"></div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url(images/acabados/SLIDE-ACABADOS-2.jpg)"></div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url(images/acabados/SLIDE-ACABADOS-3.jpg)"></div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url(images/acabados/SLIDE-ACABADOS-4.jpg)"></div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="background_image" style="background-image:url(images/acabados/SLIDE-ACABADOS-5.jpg)"></div>
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

                        </ul>
                    </div>
                </div>
                <!-- Home Slider Dots -->
                
            </div>
</div> 
@endsection