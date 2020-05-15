@extends('adminlte::page')
@section('content')
        

<div class="container">
    @if(empty($testimonialstitle))
    <form action="{{route('testimonialstitle.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="w-25">Title :</label>
            <input type="text" name="title" id="" class="@error('title')is-invalid @enderror" value="{{old('title')}}">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

     
        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @elseif(!empty($testimonialstitle))
    <form action="{{route('testimonialstitle.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id=""  class="@error('title')is-invalid @enderror" value="{{$testimonialstitle->title}}">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection