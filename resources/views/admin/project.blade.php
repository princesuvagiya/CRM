@extends('admin.layouts.master')

@section('content')

@include('admin.components.header')

@if(session('msg'))
<div class="alert alert-success">
    {{session('msg') }}
</div>
@endif

<div class="container-fluid pt-4 px-4 ">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6 ">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4"></h6>
           
                    <form action="{{ url('/InsertProjectData') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <!-- <input type="hidden" name="admin_id" value="@if(!empty($single->id)){{ $single->id }} @endif"> -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Enter name
                            </label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name">
                        </div>

         
                        <input type="submit" name="submit" value="Sing in" class="btn btn-primary">
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection