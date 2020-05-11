@if(count($features)!=0)
<!-- features section -->
	<div class="team-section spad" id="features-section">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$featurestitle->title}}</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach($featureslefts as $featureslefts)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$featureslefts->title}}</h2>
							<p>{{$featureslefts->description}}</p>
						</div>
						<div class="icon">
							<i class="{{$featureslefts->icon}}"></i>
						</div>
					</div>
					@endforeach
				
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="w-25 col-md-4 col-sm-4 features">
					@foreach($featuresrights as $featuresright)
					<div class="icon-box light w-100">
						<div class="icon">
							<i class="{{$featuresright->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$featuresright->title}}</h2>
							<p>{{$featuresright->description}}</p>
						</div>
					</div>
					@endforeach
				
				</div>
			</div>
			<div class="text-center mt100">
				<a href="#card-section" class="site-btn">{{$featurestitle->button}}</a>
			</div>
		</div>
	</div>
	<!-- features section end-->
@else 
<!-- features section -->
	<div class="team-section spad" id="features-section">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>GET IN THE LAB</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<div class="icon-box light left">
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
						<div class="icon">
							<i class="flaticon-002-caliper"></i>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light left">
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
						<div class="icon">
							<i class="flaticon-019-coffee-cup"></i>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light left">
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
						<div class="icon">
							<i class="flaticon-020-creativity"></i>
						</div>
					</div>
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-037-idea"></i>
						</div>
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
					<!-- feature item -->
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-025-imagination"></i>
						</div>
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
					<div class="icon-box light">
						<div class="icon">
							<i class="flaticon-008-team"></i>
						</div>
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center mt100">
				<a href="#card-section" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->
@endif