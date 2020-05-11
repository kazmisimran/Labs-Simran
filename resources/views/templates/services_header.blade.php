	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>

@if(empty($servicesmenu))
	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="/">Home</a></li>
				<li class="active"><a href="{{route('services')}}">Services</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="elements.html">Elements</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->
@else

<header class="header-section">
	<div class="logo">
	<img src="{{asset('storage/'.$servicesmenu->img_path)}}" alt=""><!-- Logo -->
	</div>
	<!-- Navigation -->
	<div class="responsive"><i class="fa fa-bars"></i></div>
	<nav>
		<ul class="menu-list">
			<li><a href="/">Home</a></li>
			<li class="active"><a href="{{route('services')}}">{{$servicesmenu->lien1}}</a></li>
			<li><a href="blog.html">{{$servicesmenu->lien2}}</a></li>
			<li><a href="contact.html">{{$servicesmenu->lien3}}</a></li>
			<li><a href="elements.html">{{$servicesmenu->lien4}}</a></li>
		</ul>
	</nav>
</header>
@endif