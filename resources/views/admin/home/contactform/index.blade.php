@extends('adminlte::page')
@section('content')


<div class="container">

<div class="text-center h1 mt-5">Mes messages</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Sujet</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>


        </tr>
    </thead>
@foreach ($contactforms as $contactform)
    

<tbody>

<td>{{$contactform->name}}</td>
<td>{{$contactform->email}}</td>
<td>{{$contactform->subject}}</td>
<td>{{$contactform->message}}</td>

<td>
      <form action="{{route('contactform.destroy', $contactform->id)}}" method="POST">  
        @csrf
        @method('delete')
        <button type="submit" class="bg-danger btn">Delete</button>
    </form>
</td>

@endforeach
</tbody>

</table>

</div>

@endsection