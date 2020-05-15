@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($about))
    <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="w-25">Title :</label>
            <input type="text" name="title" id="" class="@error('title')is-invalid @enderror" value="{{old('title')}}">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for=""  class="w-25">Text 1 :</label>
            <input type="text" name="text1" id="" class="@error('text1')is-invalid @enderror"  value="{{old('text1')}}">
            @error('text1')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <div>
            <label for=""  class="w-25">Text 2 :</label>
            <input type="text" name="text2" id=""  class="@error('text2')is-invalid @enderror"  value="{{old('text2')}}">
            @error('text1')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        

        <div>
            <label for=""  class="w-25">Button</label>
            <input type="text" name="button" id="" class="@error('button')is-invalid @enderror"  value="{{old('button')}}">
            @error('button')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for=""  class="w-25">Video link :</label>
            <input type="link" name="link" id="" class="@error('link')is-invalid @enderror"  value="{{old('link')}}">
            @error('link')
            <span class="text-danger">{{$message}}</span>
            @enderror


        </div>

     
        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @elseif(!empty($about))
    <form action="{{route('about.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id=""  class="@error('ttitle')is-invalid @enderror" value="{{$about->title}}">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for=""  class="w-25">Text 1</label>
            <input type="text" name="text1" id=""  class="@error('text1')is-invalid @enderror" value="{{$about->text1}}">
            @error('text1')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for=""  class="w-25">Text 2</label>
            <input type="text" name="text2" id=""  class="@error('text2')is-invalid @enderror" value="{{$about->text2}}">
            @error('text2')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for=""  class="w-25">Button</label>
            <input type="text" name="button" id=""  class="@error('button')is-invalid @enderror" value="{{$about->button}}">
            @error('button')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

        <div>
            <label for=""  class="w-25">Video link</label>
            <input type="link" name="link" id=""  class="@error('link')is-invalid @enderror" value='{{$about->link}}'>
            @error('link')
            <span class="text-danger">{{$message}}</span>
            @enderror


        </div>

     

        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection