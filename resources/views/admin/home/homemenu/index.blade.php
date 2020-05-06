@extends('adminlte::page')
@section('content')
        
<h1 class="container my-4 text-primary text-center">Dashboard Admin</h1>

<div class="container">
    @if(empty($homemenu))
    <form action="{{route('homemenu.update')}}" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div>
            <label for="" class="w-25">Logo</label>
            <input type="file" name="logo" id="logo" >

            <label for="" class="w-25">Lien 1</label>
            <input type="text" name="lien1" id="lien1" >

            <label for="" class="w-25">Lien 2</label>
            <input type="text" name="lien2" id="lien2" >

            <label for="" class="w-25">Lien 3</label>
            <input type="text" name="lien3" id="lien3" >

            <label for="" class="w-25">Lien 4</label>
            <input type="text" name="lien4" id="lien4" >

        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    
    @else
    <form action="{{route('homemenu.update')}}" method="post"   enctype="multipart/form-data" class="container">
        @csrf

        <div>
            <label for="" class="w-25">Logo</label>
            <input type="file" name="logo" id="logo" value="{{$homemenu->img_path}}">

            <label for="" class="w-25">Lien 1</label>
        <input type="text" name="lien1" id="lien1" value="{{$homemenu->lien1}}">

            <label for="" class="w-25">Lien 2</label>
            <input type="text" name="lien2" id="lien2" value="{{$homemenu->lien1}}">

            <label for="" class="w-25">Lien 3</label>
            <input type="text" name="lien3" id="lien3" value="{{$homemenu->lien1}}">

            <label for="" class="w-25">Lien 4</label>
            <input type="text" name="lien4" id="lien4" value="{{$homemenu->lien1}}" >

        </div>


        <button type="submit" class="my-3 btn-primary btn">Valider</button>
    </form>
    @endif
</div>

@endsection