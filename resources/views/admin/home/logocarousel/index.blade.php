@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($logocarousel))
    <form action="{{route('logocarousel.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <div class="form-group">
                <label for="" class="w-25">Logo</label>
                <input type="file" name="logo" id="logo" class="@error('logo')is-invalid @enderror" value="{{old('logo')}}">
                @error('logo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="" class="w-25">Caption</label>
                <input type="text" name="caption" id="caption" class="@error('caption')is-invalid @enderror" value="{{old('caption')}}">
                @error('caption')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>






        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @else
    <form action="{{route('logocarousel.update')}}" method="post"   enctype="multipart/form-data" class="container">
        @csrf

        <div>
            <div class="form-group">
                <label for="" class="w-25">Logo</label>
                <input type="file" name="logo" id="logo" class="@error('logo')is-invalid @enderror" value="{{$logocarousel->img_path}}">
                @error('logo')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="" class="w-25">Caption</label>
                <input type="text" name="caption" id="caption" class="@error('caption')is-invalid @enderror" value="{{$logocarousel->caption}}">
                @error('caption')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection