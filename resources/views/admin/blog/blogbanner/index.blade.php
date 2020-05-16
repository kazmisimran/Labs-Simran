@extends('adminlte::page')
@section('content')
        

<div class="container">
    @if(empty($blogbanner))
    <form action="{{route('blogbanner.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>

            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="title" class="@error('title')is-invalid @enderror">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror

            <label for="" class="w-25">bread 1</label>
            <input type="text" name="bread1" id="bread1" class="@error('bread1')is-invalid @enderror" >
            @error('bread1')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="" class="w-25">bread 2</label>
            <input type="text" name="bread2" id="bread2" class="@error('bread2')is-invalid @enderror">
            @error('bread2')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @else
    <form action="{{route('blogbanner.update')}}" method="post"   enctype="multipart/form-data" class="container">
        @csrf

        <div class="form-control">
            <label for="" class="w-25">Ttile</label>
            <input type="text" name="title" id="title" value="{{$blogbanner->title}}" class="@error('title')is-invalid @enderror">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="" class="w-25">bread 1</label>
            <input type="text" name="bread1" id="bread1" value="{{$blogbanner->bread1}}" class="@error('bread1')is-invalid @enderror">
            @error('bread1')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="" class="w-25">bread 2</label>
            <input type="text" name="bread2" id="bread2" value="{{$blogbanner->bread2}}" class="@error('bread2')is-invalid @enderror">
            @error('bread2')
            <span class="text-danger">{{$message}}</span>
            @enderror



        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>


@endsection