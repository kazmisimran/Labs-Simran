@extends('adminlte::page')
@section('content')

<div>
  <h1 class="bg-danger text-center">Please, only put one element in the center. I'm not that great of a coder !</h1>
</div>

<div class="container d-flex">
    <a href="{{route('team.create')}}" class='btn btn-dark  my-5'>Ajouter</a>
</div>



<table class="table container">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Filter</th>
        <th scope="col">Settings</th>
      </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
        <tr>
        <td><img src="{{asset('storage/'.$team->img_path)}}" alt="" class="w-25"></td>
        <td>{{$team->name}}</td>
        <td>{{$team->position}}</td>
        <td>{{$team->filter}}</td>


        <td>
          <a href="{{route('team.edit' , $team->id)}}" class='btn btn-dark'>Edit</a>
          <form action="{{route('team.destroy' , $team->id)}}" method="post">
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