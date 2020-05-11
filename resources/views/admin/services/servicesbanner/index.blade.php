@extends('adminlte::page')
@section('content')
        

<div class="container">
    @if(empty($servicesbanner))
    <form action="{{route('servicesbanner.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>

            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="title" >

            <label for="" class="w-25">bread 1</label>
            <input type="text" name="bread1" id="bread1" >

            <label for="" class="w-25">bread 2</label>
            <input type="text" name="bread2" id="bread2" >



        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @else
    <form action="{{route('servicesbanner.update')}}" method="post"   enctype="multipart/form-data" class="container">
        @csrf

        <div>
            <label for="" class="w-25">Ttile</label>
            <input type="text" name="title" id="title" value="{{$servicesbanner->title}}">

            <label for="" class="w-25">bread 1</label>
            <input type="text" name="bread1" id="bread1" value="{{$servicesbanner->bread1}}">

            <label for="" class="w-25">bread 2</label>
            <input type="text" name="bread2" id="bread2" value="{{$servicesbanner->bread2}}">


        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection