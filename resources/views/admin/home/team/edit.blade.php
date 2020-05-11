@extends('adminlte::page')

@section('content')

<div class="container my-5">

    <form action="{{route('team.update', $team->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img' value='{{$team->img_path}}'>
    </div>

    <div>
        <label for="" class="w-25">Name</label>
        <input type="text" name='name' id='name' value='{{$team->name}}'>
    </div>
    <div>
        <label for="" class="w-25">Position</label>
        <input type="text" name='position' id='position' value='{{$team->position}}'>
    </div>

    <button type="submit" class="btn btn-dark">Valider</button>
    </form>

</div>



@endsection