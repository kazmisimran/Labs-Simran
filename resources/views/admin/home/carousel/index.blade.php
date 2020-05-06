@extends('adminlte::page')

@section('content')


<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>


<div class="container d-flex">
  <a href="{{route('carousel.create')}}" class='btn btn-primary justify-content-center my-5'>Ajouter</a>
</div>


<table class="table container">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Settings</th>
      </tr>
    </thead>
    <tbody>
      @foreach($carousels as $carousel)
      <tr>
      <td><img src="{{asset('storage/'.$carousel->img_path)}}" alt="" class="w-25"></td>

      <td>
        <a href="{{route('carousel.edit' , $carousel->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('carousel.destroy' , $carousel->id)}}" method="post">
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