@extends('adminlte::page')

@section('css')
<link  href="{{asset('css/flaticon.css')}}" rel="stylesheet">
@endsection

@section('content')




<div class="container d-flex">
  <a href="{{route('homeservice.create')}}" class='btn btn-primary justify-content-center my-5'>Ajouter</a>
</div>


<table class="table container">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Icon</th>
        <th scope="col">Settings</th>
      </tr>
    </thead>
    <tbody>
      @foreach($homeservices as $service)
      <tr>
      <td>{{$service->title}}</td>
      <td>{{$service->description}}</td>
      <td><i class="{{$service->icon}}"></i></td>
      <td>
        <a href="{{route('homeservice.edit' , $service->id)}}" class='btn btn-warning text-white'>Edit</a>
        <form action="{{route('homeservice.destroy' , $service->id)}}" method="post">
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