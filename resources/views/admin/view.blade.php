@extends('admin.layouts.master')

@section('content')

@include('admin.components.header')

     @if(session('msg'))
   
        <div class="alert alert-success">
  
           {{session('msg')}}

        </div>

    @endif   
      
      <!-- Table Start -->
            <div class="container-fluid pt-4">
                <div class="row me-4">
                    <div>
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Table</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Webside</th>
                                        <th scope="col">Logo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($record as $r)
                                    <tr>
                                        <th scope="row">{{$r->id}}</th>
                                        <td>{{ $r->name }}</td>
                                        <td>{{ $r->email }}</td>
                                        <td>{{ $r->webside }}</td>
                                        <td><img src='{{ url("images/$r->image")}}' height="50" width="50"></td>
                                        <td><a href='{{ url("deletedata/$r->id") }}'>DELETE</a></td>
                                        <td><a href='{{ url("updatedata/$r->id") }}'>Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Table End -->

@endsection
