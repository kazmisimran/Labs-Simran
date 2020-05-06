	<!-- Intro Section -->
	<div class="hero-section">
		@if(empty($logocarousel))
		<div class="hero-content">
			<div class="hero-center">
				<img src="img/big-logo.png" alt="">
				<p>Get your freebie template now!</p>
			</div>
		</div>
		@else
		<div class="hero-content">
			<div class="hero-center">
			<img src="{{asset('storage/'.$logocarousel->img_path)}}" alt="">
			<p>{{$logocarousel->caption}}</p>
			</div>
		</div>
		@endif
		<!-- slider -->
		@if(empty($carousels))
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="img/01.jpg"></div>
			<div class="item  hero-item" data-bg="img/02.jpg"></div>
		</div>
		@else
		<div id="hero-slider" class="owl-carousel">
			@foreach ($carousels as $carousel)
		<div class="item  hero-item" data-bg="{{asset('storage/'.$carousel->img_path)}}"></div>
			@endforeach
		</div>
		@endif
	</div>
	<!-- Intro Section -->





	

