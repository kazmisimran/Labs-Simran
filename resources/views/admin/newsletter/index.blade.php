@extends('adminlte::page')

@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Emails from Newsletter</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        {{-- <h1 class="text-center mt-5 pt-5">Les messages</h1> --}}

        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Emails from Newsletter</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                       
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($newsletters as $newsletter)
                    <tr>
                      
                        <td>{{$newsletter->email}}</td>
                        
                        <td>
                          <form action="{{route('newsletter.destroy',$newsletter->id)}}" method="post">
                            @csrf
                            @method('delete')
                                <button class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    {{$newsletters->links()}}
@endsection