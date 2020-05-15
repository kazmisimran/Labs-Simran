@extends('adminlte::page')

@section('content')

<ul>
    <li><a href="{{route('homemenu')}}">Menu</a></li>
    <li><a href="blog/blogbanner">Banner</a></li>
    <li><a href="blog/post">Posts</a></li>
    <li><a href="{{route('footer')}}">Footer</a></li>


</ul>
   
 

@endsection

