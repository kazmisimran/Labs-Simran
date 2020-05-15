@extends('adminlte::page')

@section('content')

<ul>
    <li><a href="{{route('homemenu')}}">Menu</a></li>
    <li><a href="home/carousel">Carousel</a></li>
    <li><a href="{{route('logocarousel')}}">Logo + Caption Carousel</a></li>
    <li><a href="home/homeservice">Services</a></li>
    <li><a href="{{route('about')}}">About</a></li>
    <li><a href="{{route('testimonialstitle')}}">Testimonials Title</a></li>
    <li><a href="home/testimonial">Testimonials Content</a></li>
    <li><a href="{{route('ready')}}">Ready?</a></li>
    <li><a href="home/contactform">Contact form</a></li>
    <li><a href="{{route('contactinfo')}}">Contact info</a></li>
    <li><a href="home/team">Team</a></li>
    <li><a href="{{route('footer')}}">Footer</a></li>





</ul>
   
 

@endsection