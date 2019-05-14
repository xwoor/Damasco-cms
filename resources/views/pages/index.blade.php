@extends('layouts.pages')
@section('title','Home')
    
@section('content')
	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">A Luxury Stay</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">A Luxury Stay</div>
										<div class="booking_form_container">
											<form action="#" class="booking_form">
												<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
													<div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
														<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
														<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
													</div>
													<div><button class="booking_button trans_200">Book Now</button></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">A Luxury Stay</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Home Slider Dots -->
			<div class="home_slider_dots_container">
				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
						<li class="home_slider_custom_dot active"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
						<li class="home_slider_custom_dot"><i class="fas fa-circle"></i></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div> 

	<div class=" bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mt-4 mb-4">
					<h3 class="txt-white">UNA <b>VISION CONTEMPORANEA</b><br>	
						QUE PROMETE CONVERTIRSE <br>
						EN <b>HITO URBANO</b> DEL SECTOR</h3>
				</div>
				<div class="col-md-6 mt-4 mb-4">
					<p class="text-justify txt-white">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
							nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem
							ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
							nonummy nibh euismod tincidunt ut laoreet dolore magna Lorem
							ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
					</p>
				</div>
			</div>
		</div>
	</div>

	{{-- Next Section --}}
	
    
@endsection