@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($about))
    <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="w-25">Title :</label>
            <input type="text" name="title" id="" >
        </div>

        <div>
            <label for=""  class="w-25">Text 1 :</label>
            <input type="text" name="text1" id="" >
        </div>


        <div>
            <label for=""  class="w-25">Text 2 :</label>
            <input type="text" name="text2" id="" >
        </div>
        

        <div>
            <label for=""  class="w-25">Button</label>
            <input type="text" name="button" id="" >
        </div>

        <div>
            <label for=""  class="w-25">Video link :</label>
            <input type="link" name="link" id="" >

        </div>

     
        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @elseif(!empty($about))
    <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="" value="{{$about->title}}">
        </div>

        <div>
            <label for=""  class="w-25">Text 1</label>
            <input type="text" name="text1" id="" value="{{$about->text1}}">
        </div>

        <div>
            <label for=""  class="w-25">Text 2</label>
            <input type="text" name="text2" id="" value="{{$about->text2}}">
        </div>

        <div>
            <label for=""  class="w-25">Button</label>
            <input type="text" name="button" id="" value="{{$about->button}}">
        </div>

        <div>
            <label for=""  class="w-25">Video link</label>
            <input type="link" name="link" id="" >

        </div>

     

        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection