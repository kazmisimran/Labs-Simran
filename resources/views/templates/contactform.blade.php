	<!-- Contact section -->
	<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				@if(empty($contactinfo))
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>Contact us</h2>
					</div>
					<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
					<p class="con-item">0034 37483 2445 322</p>
					<p class="con-item">hello@company.com</p>
				</div>
				@else 
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$contactinfo->title}}</h2>
					</div>
					<p>{{$contactinfo->text}}</p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">{{$contactinfo->address}} </p>
					<p class="con-item">{{$contactinfo->phone}}</p>
					<p class="con-item">{{$contactinfo->email}}</p>
				</div>
				@endif
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form"  action="{{route('contactform.store')}}" method="post">
						@csrf 
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name" class="@error('name')is-invalid @enderror" value="{{old('name')}}">
								@error('name')
								<span class="text-danger">{{$message}}</span>
								@enderror
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email" class="@error('email')is-invalid @enderror" value="{{old('email')}}">
								@error('email')
								<span class="text-danger">{{$message}}</span>
								@enderror
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject" class="@error('subject')is-invalid @enderror" value="{{old('subject')}}">
								@error('subject')
								<span class="text-danger">{{$message}}</span>
								@enderror

								<textarea name="message" placeholder="Message"  class="@error('message')is-invalid @enderror" value="{{old('message')}}"></textarea>
								@error('message')
								<span class="text-danger">{{$message}}</span>
								@enderror

								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->
