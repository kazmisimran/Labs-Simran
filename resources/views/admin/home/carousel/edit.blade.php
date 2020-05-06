@extends('adminlte::page')


@section('content')


<div class="container my-5">

    <form action="{{route('carousel.update' , $carousel->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img' >
        <img src="{{asset('storage/'.$carousel->img_path)}}" alt="" class="w-25">
    </div>
 


    <button type="submit" class="btn btn-dark my-3">Valider</button>
    </form>

</div>

@endsection