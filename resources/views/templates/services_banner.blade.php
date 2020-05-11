@if(empty($servicesbanner))

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Services</h2>
				<div class="page-links">
					<a href="/">Home</a>
					<span>Services</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->
@else

<!-- Page header -->
<div class="page-top-section">
	<div class="overlay"></div>
	<div class="container text-right">
		<div class="page-info">
			<h2>{{$servicesbanner->title}}</h2>
			<div class="page-links">
				<a href="/">{{$servicesbanner->bread1}}</a>
				<span>{{$servicesbanner->bread2}}</span>
			</div>
		</div>
	</div>
</div>

@endif