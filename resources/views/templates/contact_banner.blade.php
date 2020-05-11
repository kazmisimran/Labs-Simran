	@if(empty($contactbanner))
	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Contact</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Contact</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end -->
	@else 
		<!-- Page header -->
		<div class="page-top-section">
			<div class="overlay"></div>
			<div class="container text-right">
				<div class="page-info">
					<h2>{{$contactbanner->title}}</h2>
					<div class="page-links">
						<a href="#">{{$contactbanner->bread1}}</a>
						<span>{{$contactbanner->bread2}}</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Page header end -->
		@endif
