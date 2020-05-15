@extends('adminlte::page')

@section('content')

<div class="container my-5">

    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img'>
    </div>

    <div>
        <label for="" class="w-25">Title</label>
        <input type="text" name='title' id='title'>
       
    </div>
    <div>
        <label for="" class="w-25">Content</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>


    <button type="submit" class="btn btn-dark">Valider</button>
    </form>

</div>

@endsection