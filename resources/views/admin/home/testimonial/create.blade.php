
@extends('adminlte::page')
@section('content')


<div class="container my-5">

    <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img'>
    </div>
    <div>
        <label for="" class="w-25">name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="" class="w-25">text</label>
        <input type="text" name='text' id='text'>
    </div>

    <div>
        <label for="" class="w-25">position</label>
        <input type="text" name='position' id='position'>
    </div>

    <button type="submit" class="btn btn-dark my-3">Valider</button>
    </form>

</div>

@endsection