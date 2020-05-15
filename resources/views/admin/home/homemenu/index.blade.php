@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($homemenu))
    <form action="{{route('homemenu.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <div class="form-group">
                <label for="" class="w-25">Logo</label>
                <input type="file" name="logo" id="logo" class="@error('logo') is-invalid @enderror" value="{{old('logo')}}" >
                @error('logo')
                    <span class="text-danger">{{$message}}</span>
                @enderror
    
            </div>

            <div class="form-group">
                <label for="" class="w-25">Lien 1</label>
                <input type="text" name="lien1" id="lien1" class="@error('lien1')is-invalid @enderror" value="{{old('lien1')}}">
                @error('lien1')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="" class="w-25">Lien 2</label>
                <input type="text" name="lien2" id="lien2" class="@error('lien2')is-invalid @enderror" value="{{old('lien2')}}">
                @error('lien2')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="" class="w-25">Lien 3</label>
                <input type="text" name="lien3" id="lien3" class="@error('lien3')is-invalid @enderror" value="{{old('lien3')}}">
                @error('lien3')
                <span class="text-danger">{{$message}}</span>
                @enderror


            </div>

            <div class="form-group">
                <label for="" class="w-25">Lien 4</label>
                <input type="text" name="lien4" id="lien4" class="@error('lien4')is-invalid @enderror" value="{{old('lien4')}}">
                @error('lien4')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @else
    <form action="{{route('homemenu.update')}}" method="post"   enctype="multipart/form-data" class="container">
        @csrf

        <div>
            <div class="form-group">
                <label for="" class="w-25">Logo</label>
                <input type="file" name="logo" id="logo"  class="@error('logo') is-invalid @enderror"  value="{{$homemenu->img_path}}">
                @error('logo')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="" class="w-25">Lien 1</label>
                <input type="text" name="lien1" id="lien1" class="@error('lien1')is-invalid @enderror" value="{{$homemenu->lien1}}">
                @error('lien1')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                <label for="" class="w-25">Lien 2</label>
                <input type="text" name="lien2" id="lien2" class="@error('lien2')is-invalid @enderror" value="{{$homemenu->lien2}}">
                @error('lien2')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>    

            <div class="form-group">
                <label for="" class="w-25">Lien 3</label>
                <input type="text" name="lien3" id="lien3" class="@error('lien3')is-invalid @enderror" value="{{$homemenu->lien3}}">
                @error('lien3')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>    

            <div class="form-group">
                <label for="" class="w-25">Lien 4</label>
                <input type="text" name="lien4" id="lien4" class="@error('lien4')is-invalid @enderror" value="{{$homemenu->lien4}}" >
                @error('lien4')
                <span class="text-danger">{{$message}}</span>
                @enderror


            </div>    
            
        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection