@if(empty($footer))
	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->
@else
	<footer class="footer-section">
		<h2>{{$footer->caption}}</a></h2>
	</footer>
@endif