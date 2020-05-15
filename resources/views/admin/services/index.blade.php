@extends('adminlte::page')

@section('content')

<ul>
    <li><a href="{{route('homemenu')}}">Menu</a></li>
    <li><a href="{{route('servicesbanner')}}">Banner</a></li>
    <li><a href="home/homeservice">Services</a></li>
    <li><a href="{{route('featurestitle')}}">Features</a></li>
    <li><a href="home/contactform">Contact form</a></li>
    <li><a href="{{route('contactinfo')}}">Contact info</a></li>
    <li><a href="{{route('footer')}}">Footer</a></li>

</ul>
   

@endsection