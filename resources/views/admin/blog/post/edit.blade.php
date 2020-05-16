@extends('adminlte::page')

@section('text')

<div class="container my-5">

    <form action="{{route('post.update', $post->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('put')
        <div>
            <label for="" class="w-25">Image</label>
            <input type="file" name='img' id='img' class="@error('img')is-invalid @enderror" value="{{$message->img}}">
            @error('img')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    
        <div>
            <label for="" class="w-25">Title</label>
            <input type="text" name='title' id='title' class="@error('title')is-invalid @enderror" value="{{$message->title}}">
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
    
           
        </div>
        <div>
            <label for="" class="w-25">Content</label>
            <textarea name="text" id="" cols="30" rows="10" class="@error('text')is-invalid @enderror" value="{{$message->text}}"></textarea>
            @error('text')
                <span class="text-danger">{{$message}}</span>
            @enderror
    
        </div>
    
        <div>
            <label for="">Date</label>
            <input type="text" name='day' class="@error('day')is-invalid @enderror" value="{{$message->day}}">
            @error('day')
            <span class="text-danger">{{$message}}</span>
            @enderror
    
            <select name="month" id="" class="@error('month')is-invalid @enderror" value="{{$message->month}}">
                <option value="">--Please choose an option--</option>
                <option value="Jan">Jan</option>
                <option value="Feb">Feb</option>
                <option value="Mars">Mars</option>
                <option value="Apr">Apr</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="Jul">Jul</option>
                <option value="Aug">Aug</option>
                <option value="Sept">Sept</option>
                <option value="Oct">Oct</option>
                <option value="Nov">Nov</option>
                <option value="Dec">Dec</option>
            </select>
            @error('month')
            <span class="text-danger">{{$message}}</span>
            @enderror
    
            <input type="text" name='year' class="@error('year')is-invalid @enderror" value="{{$message->year}}">
            @error('year')
            <span class="text-danger">{{$message}}</span>
            @enderror
    
        </div>


    <button type="submit" class="btn btn-dark">Valider</button>
    </form>

</div>



@endsection