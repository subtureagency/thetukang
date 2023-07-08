@extends('layouts.master')

@section('content')
	<!-- Visual Area -->
	<div class="home">
		<div class="visual-area">
			<div class="description position-absolute">
				<div class="container h-100">
					<div class="row h-100 align-items-center justify-content-center">
						<div class="col-12 col-md-8">
							<form class="search-form" action="{{route('user.index')}}" method="get">
								<div class="form-group">
									<label for="service">Service</label>
									<input type="text" name="search" class="form-control" placeholder="What kind of services do you need?">
								</div>
								<input type="submit" class="btn btn-primary" value="find">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="image-holder"><img src="{{ url('theme/images/banner.jpg')}}" alt="banner"></div>
		</div>
	</div>

	<!-- Booking Block -->
	<div class="booking-block">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8 col-lg-6 text-center">
					<h2>Hire the best handyman with us</h2>
					<p>The easiest way to hire reliable service professionals for your home.</p>
					<a href="#" class="btn btn-primary">Book Now</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Services Block -->
	<div class="services-block">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-9">
					<h2 class="text-center">Popular services on TheTukang</h2>
					<div class="row justify-content-center">
						<div class="col-6 col-sm-4 col-lg">
							<div class="box">
								<a href="#">
									<div class="image-holder"><img src="{{ url('theme/images/img-01.jpg')}}" alt="image"></div>
									<strong class="title">House Cleaning (with basic sanitization)</strong>
								</a>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-lg">
							<div class="box">
								<a href="#">
									<div class="image-holder"><img src="{{ url('theme/images/img-02.jpg')}}" alt="image"></div>
									<strong class="title">Aircond Servicing</strong>
								</a>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-lg">
							<div class="box">
								<a href="#">
									<div class="image-holder"><img src="{{ url('theme/images/img-03.jpg')}}" alt="image"></div>
									<strong class="title">Plumbing Repair</strong>
								</a>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-lg">
							<div class="box">
								<a href="#">
									<div class="image-holder"><img src="{{ url('theme/images/img-04.jpg')}}" alt="image"></div>
									<strong class="title">Electrical Wiring / Power Point</strong>
								</a>
							</div>
						</div>
						<div class="col-6 col-sm-4 col-lg">
							<div class="box">
								<a href="#">
									<div class="image-holder"><img src="{{ url('theme/images/img-05.jpg')}}" alt="image"></div>
									<strong class="title">Local Moving -  Budget Lorry</strong>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- How it works -->
	<div class="how-it-works">
		<div class="container text-center">
			<div class="row">
				<div class="col-12">
					<h2>How it works</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-9">
					<div class="row justify-content-center">
						<div class="col-6 col-md-4">
							<div class="box">
								<div class="image-holder">
									<img src="{{ url('theme/images/thumbnail-01.jpg')}}" alt="image">
									<img class="arrow" src="{{ url('theme/images/arrow1.png')}}" alt="arrow">
								</div>
								<h3>1. Request Services</h3>
								<p>Need some help? Tell us what services you need and where do you need them - directly from our website or mobile app.</p>
							</div>
						</div>
						<div class="col-6 col-md-4">
							<div class="box">
								<div class="image-holder">
									<img src="{{ url('theme/images/thumbnail-02.jpg')}}" alt="image">
									<img class="arrow" src="{{ url('theme/images/arrow2.png')}}" alt="arrow">
								</div>
								<h3>2. Get Connected</h3>
								<p>Depending on the service, we will send quotes or assign you a vendor at fixed prices. Speed, reliability, value and satisfaction is our priority.</p>
							</div>
						</div>
						<div class="col-6 col-md-4">
							<div class="box">
								<div class="image-holder"><img src="{{ url('theme/images/thumbnail-03.jpg')}}" alt="image"></div>
								<h3>3. Hire &amp; Pay</h3>
								<p>Hire the right vendor for your job request. Once the vendor completed the job, you can pay them directly from the app.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
