@extends('admin.layouts.master')

@section('content')

@include('admin.components.header')

           
<div>

@if(session('msg'))

    <div class="alert alert-success">
        {{session('msg')}}
    </div>
        
@endif
<!-- Table Start -->
<div class="container-fluid pt-4">
    <div class="row me-4">
    </div>
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Basic Table</h6>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($record as $r)
                <tr>
                    <th scope="row">{{$r->id}}</th>
                    <td>{{ $r->categoryname }}</td>
                    <td><a href='{{ url("categoryDeleteData/$r->id") }}' class="btn btn-danger">DELETE</a></td>
                    <td><a href='{{ url("categoryUpdatedata/$r->id") }}' class="btn btn-info">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>       

<!-- Table End -->

@endsection