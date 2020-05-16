@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($ready))
    <form action="{{route('ready.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="w-25">Title :</label>
            <input type="text" name="title" id="" class="@error('title')is-invalid @enderror" value="{{old('title')}}">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for=""  class="w-25">Caption</label>
            <input type="text" name="caption" id="" class="@error('caption')is-invalid @enderror" value="{{old('caption')}}">
            @error('caption')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for=""  class="w-25">Button</label>
            <input type="text" name="button" id="" class="@error('button')is-invalid @enderror" value="{{old('button')}}">
            @error('button')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

       

     
        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @elseif(!empty($ready))
    <form action="{{route('ready.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="" value="{{$ready->title}}" class="@error('title')is-invalid @enderror">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for=""  class="w-25">Caption</label>
            <input type="text" name="caption" id="" value="{{$ready->caption}}" class="@error('caption')is-invalid @enderror">
            @error('caption')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

       
        <div>
            <label for=""  class="w-25">Button</label>
            <input type="text" name="button" id="" value="{{$ready->button}}" class="@error('button')is-invalid @enderror">
            @error('button')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection