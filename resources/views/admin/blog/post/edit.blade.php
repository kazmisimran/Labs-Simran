@extends('adminlte::page')

@section('content')

<div class="container my-5">

    <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img' value='{{$post->img_path}}'>
    </div>

    <div>
        <label for="" class="w-25">Title</label>
        <input type="text" name='title' id='title' value='{{$post->title}}'>
    </div>
    <div>
        <label for="" class="w-25">Position</label>
        <textarea name="content" id="" cols="30" rows="10" value='{{$post->content}}'></textarea>

    </div>



    <button type="submit" class="btn btn-dark">Valider</button>
    </form>

</div>



@endsection