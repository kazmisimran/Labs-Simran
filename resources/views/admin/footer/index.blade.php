@extends('adminlte::page')
@section('content')
        

<div class="container">
    @if(empty($footer))
    <form action="{{route('footer.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="" class="w-25">caption :</label>
            <input type="text" name="caption" id="" class="@error('caption')is-invalid @enderror" value="{{old('caption')}}">
            @error('caption')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

     
        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @elseif(!empty($footer))
    <form action="{{route('footer.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">caption</label>
            <input type="text" name="caption" id="" value="{{$footer->caption}}" class="@error('caption')is-invalid @enderror">
            @error('caption')
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection