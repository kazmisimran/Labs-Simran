	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				@if(count($homeservices)==0)
				<div class="row">
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-023-flask"></i>
							</div>
							<h2>Get in the lab</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-011-compass"></i>
							</div>
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
					<!-- single card -->
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<i class="flaticon-037-idea"></i>
							</div>
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				@else
				<div class="row">
					<!-- single card -->
					@foreach ($servs->random(3) as $serv)
					<div class="col-md-4  @if($loop->last)col-sm-12 @else col-sm-6 @endif">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$serv->icon}}"></i>
							</div>
							<h2>{{$serv->title}}</h2>
							<p>{{$serv->description}}</p>
						</div>
					</div>
					@endforeach
				</div>
				@endif
			</div>
		</div>
		<!-- card section end-->


@if(empty($about))
		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>Get in <span>the Lab</span> and discover the world</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
					</div>
					<div class="col-md-6">
						<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->
@else 
		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$about->title}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
					<p>{{$about->text1}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$about->text2}}</p>
					</div>
				</div>
				<div class="text-center mt60">
				<a href="" class="site-btn">{{$about->button}}</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="{{$about->link}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


@endif

	