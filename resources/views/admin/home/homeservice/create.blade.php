@extends('adminlte::page')

@section('css')
<link  href="{{asset('css/flaticon.css')}}" rel="stylesheet">
@endsection

@section('content')


<div class="container my-5">

    <form action="{{route('homeservice.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
  
    <div>
        <label for="" class="w-25">Title</label>
        <input type="text" name="title" id="title" class="@error('title')is-invalid @enderror" value="{{old('title')}}">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror

    </div>
    <div>
        <label for="" class="w-25">Description</label>
        <input type="text" name='description' id='description'  class="@error('description')is-invalid @enderror" value="{{old('description')}}">
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror

    </div>

    <div class="my-5 d-flex justify-content-around ">
        <div><input type="radio" value="flaticon-023-flask" name="icon"><i class="flaticon-023-flask h2"></i></div>
        <div><input type="radio" value="flaticon-011-compass" name="icon"><i class="flaticon-011-compass h2"></i></div>
        <div><input type="radio" value="flaticon-037-idea" name="icon"><i class="flaticon-037-idea h2"></i></div>
        <div><input type="radio" value="flaticon-039-vector" name="icon"><i class="flaticon-039-vector h2"></i></div>
        <div><input type="radio" value="flaticon-036-brainstorming" name="icon"><i class="flaticon-036-brainstorming h2"></i></div>
        <div><input type="radio" value="flaticon-026-search" name="icon"><i class="flaticon-026-search h2"></i></div>
        <div><input type="radio" value="flaticon-018-laptop-1" name="icon"><i class="flaticon-018-laptop-1 h2"></i></div>
        <div><input type="radio" value="flaticon-043-sketch" name="icon"><i class="flaticon-043-sketch h2"></i></div>
        <div><input type="radio" value="flaticon-012-cube" name="icon"><i class="flaticon-012-cube h2"></i></div>
    </div>
    @error('icon')
    <span class="text-danger">{{$message}}</span>
    @enderror
    <button type="submit" class="btn btn-dark my-3 d-block">Valider</button>
    </form>

</div>


@endsection

