	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>

@if(empty($homemenu))
	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li ><a href="/">Home</a></li>
				<li><a href="{{route('services')}}">Services</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li  class="active"><a href="{{route('contact')}}">Contact</a></li>
				<li><a href="elements.html">Elements</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->
@else

<header class="header-section">
	<div class="logo">
	<img src="{{asset('storage/'.$homemenu->img_path)}}" alt=""><!-- Logo -->
	</div>
	<!-- Navigation -->
	<div class="responsive"><i class="fa fa-bars"></i></div>
	<nav>
		<ul class="menu-list">
			<li ><a href="/">Home</a></li>
			<li class="active"><a href="{{route('services')}}">{{$homemenu->lien1}}</a></li>
			<li><a href="blog.html">{{$homemenu->lien2}}</a></li>
			<li  class="active"><a href="{{route('contact')}}">{{$homemenu->lien3}}</a></li>
			<li><a href="elements.html">{{$homemenu->lien4}}</a></li>
		</ul>
	</nav>
</header>
@endif