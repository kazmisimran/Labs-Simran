@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($contactinfo))
    <form action="{{route('contactinfo.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="title" class="@error('title')is-invalid @enderror" value="{{old('title')}}" >
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div>
            <label for="" class="w-25">Text</label>
            <textarea name="text" id="text" cols="30" rows="10"  class="@error('text')is-invalid @enderror" value="{{old('text')}}"></textarea>
            @error('text')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="" class="w-25">Address</label>
            <input type="text" name="address" id="address" class="@error('address')is-invalid @enderror" value="{{old('address')}}">
            @error('address')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div>
            <label for="" class="w-25">Phone</label>
            <input type="text" name="phone" id="phone" class="@error('phone')is-invalid @enderror" value="{{old('phone')}}">
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div>
            <label for="" class="w-25">Email</label>
            <input type="text" name="email" id="email" class="@error('email')is-invalid @enderror" value="{{old('email')}}">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @elseif(!empty($contactinfo))
    <form action="{{route('contactinfo.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="title" value="{{$contactinfo->title}}" class="@error('title')is-invalid @enderror">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div>
            <label for="" class="w-25">Text</label>
            <textarea name="text" id="text" value={{$contactinfo->text}} cols="30" rows="10"  class="@error('text')is-invalid @enderror"></textarea>
            @error('text')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div>
            <label for="" class="w-25">Address</label>
            <input type="text" name="address" id="address" value={{$contactinfo->address}} class="@error('address')is-invalid @enderror">
            @error('address')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div>
            <label for="" class="w-25">Phone</label>
            <input type="text" name="phone" id="phone" value={{$contactinfo->phone}} class="@error('phone')is-invalid @enderror">
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div>
            <label for="" class="w-25">Email</label>
            <input type="text" name="email" id="email" value={{$contactinfo->email}}  class="@error('email')is-invalid @enderror">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror


        </div>



        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection