@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($contactinfo))
    <form action="{{route('contactinfo.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="title" >
        </div>
        <div>
            <label for="" class="w-25">Text</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="" class="w-25">Address</label>
            <input type="text" name="address" id="address" >
        </div>
        <div>
            <label for="" class="w-25">Phone</label>
            <input type="text" name="phone" id="phone" >
        </div>
        <div>
            <label for="" class="w-25">Email</label>
            <input type="text" name="email" id="email" >
        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @elseif(!empty($contactinfo))
    <form action="{{route('contactinfo.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name="title" id="title" value="{{$contactinfo->title}}">
        </div>
        <div>
            <label for="" class="w-25">Text</label>
            <textarea name="text" id="text" value={{$contactinfo->text}} cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="" class="w-25">Address</label>
            <input type="text" name="address" id="address" value={{$contactinfo->address}}>
        </div>
        <div>
            <label for="" class="w-25">Phone</label>
            <input type="text" name="phone" id="phone" value={{$contactinfo->phone}}>
        </div>
        <div>
            <label for="" class="w-25">Email</label>
            <input type="text" name="email" id="email" value={{$contactinfo->email}}>
        </div>



        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection