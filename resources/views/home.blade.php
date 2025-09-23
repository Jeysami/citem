@extends('layout')

@section('content')

	@if(session('success'))
		<div class="alert alert-success mt-3">
		</div>
	@endif

	<nav class="navbar navbar-light bg-white justify-content-between">
	  <a class="navbar-brand"></a>
	  <form class="form-inline">
	  	<img src="{{ asset('images/fame2.png') }}" style="height:40px; margin-left:-620%;" alt="Logo">

	    <a class="btn btn-success" href="{{ route('register_account') }}" style="margin-left:620%; margin-top:0%;">Register</a>
	  </form>
	</nav>

	<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="{{ asset('images/image2.jpeg') }}" class="d-block w-100" alt="Slide 1">
	    </div>
	    <div class="carousel-item">
	      <img src="{{ asset('images/image3.jpeg') }}" class="d-block w-100" alt="Slide 2">
	    </div>
	    <div class="carousel-item">
	      <img src="{{ asset('images/image4.jpg') }}" class="d-block w-100" alt="Slide 3">
	    </div>
	    <div class="carousel-item">
	      <img src="{{ asset('images/image5.jpg') }}" class="d-block w-100" alt="Slide 3">
	    </div>
	  </div>

	  <!-- Controls -->
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </button>
	</div>	

	<div class='just-space'>
	</div>


	<img src="{{ asset('images/image1.jpg') }}" style="width:100%;" alt="Logo">

	<div>
		<p><font family="sans-serif"><center>
			Why visit Manila FAME?
			<ul>
		    <li><b>Source Directly:</b> Meet and build relationships with hundreds of top Philippine exporters.</li>
		    <li><b>Discover New Trends:</b> Be the first to see the latest collections and design innovations.</li>
		    <li><b>Sustainable & Ethical:</b> Find products with a story, made with sustainable materials and ethical practices.</li>
		    <li><b>Exclusive Access:</b> Gain entry to special showcases, industry, talks, and networking events.</li>
		</ul>
		</center></font></p>
	</div>


	

	@include('footer') <!-- Footer here -->

	

@endsection