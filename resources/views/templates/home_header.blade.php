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
				<li class="active"><a href="/">Home</a></li>
				<li><a href="services.html">Services</a></li>
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
	<img src="{{asset('storage/'.$homemenu->img_path)}}" alt=""><!-- Logo -->
	</div>
	<!-- Navigation -->
	<div class="responsive"><i class="fa fa-bars"></i></div>
	<nav>
		<ul class="menu-list">
			<li class="active"><a href="/">Home</a></li>
		<li><a href="services.html">{{$homemenu->lien1}}</a></li>
			<li><a href="blog.html">{{$homemenu->lien1}}</a></li>
			<li><a href="contact.html">{{$homemenu->lien1}}</a></li>
			<li><a href="elements.html">{{$homemenu->lien1}}</a></li>
		</ul>
	</nav>
</header>
@endif