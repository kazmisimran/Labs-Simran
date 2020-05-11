@extends('adminlte::page')
@section('content')
        

<div class="container">
    @if(empty($featurestitle))
    <form action="{{route('featurestitle.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>

            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="title" >

            <label for="" class="w-25">Button</label>
            <input type="text" name="button" id="button" >




        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @else
    <form action="{{route('featurestitle.update')}}" method="post"   enctype="multipart/form-data" class="container">
        @csrf

        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="title" value="{{$featurestitle->title}}">

            <label for="" class="w-25">Button</label>
            <input type="text" name="button" id="button" value="{{$featurestitle->button}}">


        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection