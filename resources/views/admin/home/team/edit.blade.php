@extends('adminlte::page')

@section('content')

<div class="container my-5">

    <form action="{{route('team.update', $team->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img' value='{{$team->img_path}}' class=" @error('img')is-invalid @enderror">
        @error('img')
        <span class="text-danger">{{$message}}</span>
        @enderror

    </div>

    <div>
        <label for="" class="w-25">Name</label>
        <input type="text" name='name' id='name' value='{{$team->name}}' class=" @error('name')is-invalid @enderror">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror

    </div>
    <div>
        <label for="" class="w-25">Position</label>
        <input type="text" name='position' id='position' value='{{$team->position}}' class=" @error('position')is-invalid @enderror">
        @error('position')
        <span class="text-danger">{{$message}}</span>
        @enderror

    </div>

    <div>
        <label for="" class="d-block">Filtre</label>
        <input type="radio" value= "Side" name="filter"><p class="d-inline mr-5">Side</p>
        <input type="radio" value= "Center" name="filter"><p class="d-inline mr-5">Center</p>
        @error('filter')
        <span class="text-danger">{{$message}}</span>
        @enderror

    </div>

    <button type="submit" class="btn btn-dark">Valider</button>
    </form>

</div>



@endsection