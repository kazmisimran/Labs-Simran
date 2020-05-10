	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				@if(count($teams)==0)
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/1.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Project Manager</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Junior developer</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/3.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Digital designer</h3>
					</div>
				</div>
				@else 
					@foreach ($teams as $team)
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('storage/'.$team->img_path)}}" alt="">
							<h2>{{$team->name}}</h2>
							<h3>{{$team->position}}</h3>
						</div>
					</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
	<!-- Team Section end-->

