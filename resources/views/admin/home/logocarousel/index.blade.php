@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($logocarousel))
    <form action="{{route('logocarousel.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Logo</label>
            <input type="file" name="logo" id="logo" >

            <label for="" class="w-25">Lien 1</label>
            <input type="text" name="caption" id="caption" >

        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @else
    <form action="{{route('logocarousel.update')}}" method="post"   enctype="multipart/form-data" class="container">
        @csrf

        <div>
            <label for="" class="w-25">Logo</label>
            <input type="file" name="logo" id="logo" value="{{$logocarousel->img_path}}">

            <label for="" class="w-25">Lien 1</label>
            <input type="text" name="caption" id="caption" value="{{$logocarousel->caption}}">
        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection