
@extends('adminlte::page')
@section('content')


<div class="container my-5">

    <form action="{{route('testimonial.update' , $testimonial->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img' class="@error('img')is-invalid @enderror">
        @error('img')
        <span class="text-danger">{{$message}}</span>
        @enderror
        <img src="{{asset('storage/'.$testimonial->img_path)}}" alt="" class="w-25">
    </div>
    <div>
        <label for="" class="w-25">name</label>
        <input type="text" name="name" id="name" value="{{$testimonial->name}}" class="@error('name')is-invalid @enderror">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror

    </div>
    <div>
        <label for="" class="w-25">text</label>
        <textarea name="text" id="text" value="{{$testimonial->text}}" cols="30" rows="10" class="@error('text')is-invalid @enderror"></textarea>
        @error('text')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div>
        <label for="" class="w-25">position</label>
        <input type="text" name='position' id='position' value="{{$testimonial->position}}" class="@error('position')is-invalid @enderror" >
        @error('position')
        <span class="text-danger">{{$message}}</span>
        @enderror

    </div>


 

    <button type="submit" class="btn btn-dark my-3">Valider</button>
    </form>

</div>

@endsection