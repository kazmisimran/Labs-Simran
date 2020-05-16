@extends('adminlte::page')
@section('content')


<div class="container d-flex">
    <a href="{{route('post.create')}}" class='btn btn-dark  my-5'>Ajouter</a>
</div>



<table class="table container">
    <thead>
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col">Content</th>
        <th scope="col">Settings</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
        <td><img src="{{asset('storage/'.$post->img_path)}}" alt="" class="w-25"></td>
        <td>{{$post->title}}</td>
        <td>{{$post->day}} {{$post->month}}  {{$post->year}}</td>
        <td>{{$post->content}}</td>


        <td>
          <a href="{{route('post.edit' , $post->id)}}" class='btn btn-dark'>Edit</a>
          <form action="{{route('post.destroy' , $post->id)}}" method="post">
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