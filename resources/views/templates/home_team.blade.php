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
					@for($i=0;$i<3;$i++)
					@if($i==1)
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('storage/'.$center[0]->img_path)}}" alt="">
							<h2>{{$center[0]->name}}</h2>
							<h3>{{$center[0]->position}}</h3>
						</div>
					</div>
					@else
					@if($i==0)
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('storage/'.$side[0]->img_path)}}" alt="">
							<h2>{{$side[0]->name}}</h2>
							<h3>{{$side[0]->position}}</h3>
						</div>
					</div>
					@elseif($i==2)
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('storage/'.$side[1]->img_path)}}" alt="">
							<h2>{{$side[1]->name}}</h2>
							<h3>{{$side[1]->position}}</h3>
						</div>
					</div>
					@endif
					@endif
					@endfor
				@endif
			</div>
		</div>
	</div>
	<!-- Team Section end-->

