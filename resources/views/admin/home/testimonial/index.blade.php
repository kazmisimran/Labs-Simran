
@extends('adminlte::page')

@section('content')


<div class="container d-flex">
  <a href="{{route('testimonial.create')}}" class='btn btn-primary justify-content-center my-5'>Ajouter</a>
</div>


<table class="table container">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Text</th>
        <th scope="col">Position</th>
        <th scope="col">Settings</th>
      </tr>
    </thead>
    <tbody>
      @foreach($testimonials as $testimonial)
      <tr>
      <td><img src="{{asset('storage/'.$testimonial->img_path)}}" alt="" class="w-25"></td>
      <td>{{$testimonial->name}}</td>
      <td>{{$testimonial->text}}</td>
      <td>{{$testimonial->position}}</td>
    
      <td>
        <a href="{{route('testimonial.edit' , $testimonial->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('testimonial.destroy' , $testimonial->id)}}" method="post">
          @csrf
          @method('delete')
          <button class='btn btn-danger my-3'>Delete</button>
        </form>
      </td>
      </tr>
      @endforeach
     
    </tbody>
</table>

@endsection
