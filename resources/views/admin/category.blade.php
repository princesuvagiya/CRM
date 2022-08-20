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
                <h6 class="mb-4">Category</h6>
                @if(!empty($single->id))
                 
                  <form action="{{ url('/EditCategory') }}" method="POST">
                   
                 
                @else 

                  <form action="{{ url('/categoryData') }}" method="POST">

                  
                @endif
                    @csrf
                    <input type="hidden" name="category_id" value="@if(!empty($single->id)){{ $single->id }} @endif">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">
                            Enter Category
                        </label>
                        <input type="text" name="categoryname" value="{{ @$single->categoryname }}" class="form-control" id="exampleInputEmail1" placeholder="Enter Category">
                    </div>
                    @if(!empty($single->id))
  
                       <input type="submit" name="submit" value="Edit" class="btn btn-primary">
                       
                    @else
                      <input type="submit" name="submit" value="Sing in" class="btn btn-primary">

                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection  