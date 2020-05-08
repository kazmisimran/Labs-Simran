
@extends('adminlte::page')
@section('content')


<div class="container my-5">

    <form action="{{route('testimonial.update' , $testimonial->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img' >
        <img src="{{asset('storage/'.$testimonial->img_path)}}" alt="" class="w-25">
    </div>
    <div>
        <label for="" class="w-25">name</label>
    <input type="text" name="name" id="name" value="{{$testimonial->name}}">
    </div>
    <div>
        <label for="" class="w-25">text</label>
    <input type="text" name='text' id='text' value="{{$testimonial->text}}">
    </div>
    <div>
        <label for="" class="w-25">position</label>
    <input type="text" name='position' id='position' value="{{$testimonial->position}}">
    </div>


 

    <button type="submit" class="btn btn-dark my-3">Valider</button>
    </form>

</div>

@endsection