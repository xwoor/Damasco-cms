<!DOCTYPE html>
    <html lang="es">
        <head>
            <title>Damasco - @yield('title')</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="The River template project">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
            <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
            <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
            <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
            <link rel="stylesheet" type="text/css" href="styles/responsive.css">
            <link rel="stylesheet" type="text/css" href="css/estilos.css">
        </head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-between">
			<div>
                <a class="txt-yellow" href="/" >PAGINA EN CONTRRUCCIÓN +</a>
            </div>
            <div>
                <a href="/" class="txt-white">BIENVENIDOS A <img class="medium-logo" src="{{asset('images/EXPORTS_logo_38.png') }}"></a>
            </div>
            <div class="only-desk">
                <a href=""><img class="small-logo" src="{{asset('images/EXPORTS_fb.png') }}"></a>
                <a href=""><img class="small-logo" src="{{asset('images/EXPORTS_ig.png') }}"></a>
                <a href=""><img class="medium-logo" src="{{asset('images/EXPORTS_logo_38.png') }}"></a>
                <a href=""><img class="medium-logo" src="{{asset('images/EXPORTS_logo_damasco.png') }}"></a>
            </div>

		</div>
	</header>

	<!-- Menu -->

    

    @yield('content')
	<!-- Footer -->

	<footer class="footer d-flex justify-content-center">
        <a href="http://www.casacreativa.co/" target="blank">
		    <img height="30px" src="{{asset('images/EXPORTS_casa_creativa.png')}} ">
        </a>
	</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>