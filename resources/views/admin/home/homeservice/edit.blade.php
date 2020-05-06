

@extends('adminlte::page')
@section('content')


<div class="container my-5">

    <form action="{{route('homeservice.update' , $service->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
 
    <div>
        <label for="" class="w-25">Title</label>
    <input type="text" name="title" id="title" value="{{$service->title}}">
    </div>
    <div>
        <label for="" class="w-25">Description</label>
    <input type="text" name='description' id='description' value="{{$service->description}}">
    </div>

    <div class="d-flex">
        <input type="radio" value= "flaticon-023-flask" name="icon"><i class="flaticon-023-flask"></i>
        <input type="radio" value= "flaticon-011-compass" name="icon"><i class="flaticon-011-compass"></i>
        <input type="radio" value= "flaticon-037-idea" name="icon"><i class="flaticon-037-idea"></i>
        <input type="radio" value= "flaticon-039-vector" name="icon"><i class="flaticon-039-vector"></i>
        <input type="radio" value= "flaticon-036-brainstorming" name="icon"><i class="flaticon-036-brainstorming"></i>
        <input type="radio" value= "flaticon-026-search" name="icon"><i class="flaticon-026-search"></i>
        <input type="radio" value= "flaticon-018-laptop-1" name="icon"><i class="flaticon-018-laptop-1"></i>
        <input type="radio" value= "flaticon-043-sketch" name="icon"><i class="flaticon-043-sketch"></i>
        <input type="radio" value= "flaticon-012-cube" name="icon"><i class="flaticon-012-cube"></i>
    </div>
    <button type="submit" class="btn btn-dark my-3">Valider</button>
    </form>

</div>

@endsection