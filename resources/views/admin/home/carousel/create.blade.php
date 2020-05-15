@extends('adminlte::page')

@section('content')


<div class="container my-5">

    <form action="{{route('carousel.store')}}" method="post" enctype="multipart/form-data">
        @csrf 
    <div>
        <label for="" class="w-25">Image</label>
        <input type="file" name='img' id='img' class="@error('img')is-invalid @enderror" value="{{old('img')}}">
        @error('img')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  
    <button type="submit" class="btn btn-dark my-3">Valider</button>
    </form>

</div>

@endsection