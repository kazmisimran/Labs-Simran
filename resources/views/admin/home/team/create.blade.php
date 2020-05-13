@extends('adminlte::page')

@section('content')

<div class="container my-5">

    <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img'>
    </div>

    <div>
        <label for="" class="w-25">Name</label>
        <input type="text" name='name' id='name' class=" @error('name')is-invalid @enderror">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="" class="w-25">Position</label>
        <input type="text" name='position' id='position'>
    </div>

    <div>
        <label for="" class="d-block">Filtre</label>
        <input type="radio" value= "Side" name="filter"><p class="d-inline mr-5">Side</p>
        <input type="radio" value= "Center" name="filter"><p class="d-inline mr-5">Center</p>
    </div>

    <button type="submit" class="btn btn-dark">Valider</button>
    </form>

</div>

@endsection