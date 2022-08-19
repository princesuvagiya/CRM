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
                    <h6 class="mb-4">company</h6>
                    @if(!empty($single->id)) 
                          <form action="{{ url('/editData') }}" method="POST" enctype="multipart/form-data">
                    @else
                          <form action="{{ url('/InsertData') }}" method="POST" enctype="multipart/form-data">
                    @endif
                        @csrf

                    <input type="hidden" name="admin_id" value="@if(!empty($single->id)){{ $single->id }} @endif">
                        <div class="mb-3">
                            <label
                             for="exampleInputEmail1"
                             class="form-label">
                             Enter name
                            </label> 
                            <input
                             type="text"
                             name="name"
                             value="{{  @$single->name }}"
                             class="form-control"
                             id="exampleInputEmail1"
                             placeholder="Enter Your Name"
                            >
                            @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label
                             for="exampleInputEmail1"
                             class="form-label">
                             Enter email
                            </label>
                            <input
                             type="email"
                             name="email"
                             value="{{  @$single->email }}"
                             class="form-control"
                             id="exampleInputEmail1"
                             placeholder="Enter Your Email"
                            >
                            @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label
                             for="exampleInputEmail1"
                             class="form-label">
                             Uplode Logo
                            </label>
                            <input
                             type="file" 
                             class="form-control"  
                             name="image"
                             id="exampleInputEmail1"
                             placeholder="Add Logo"
                            >
                            @if(!empty($single->image))
                            <img src='{{ url("images/$single->image")}}' height="50" width="50">
                            @endif
                            @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label
                             for="exampleInputEmail1"
                             class="form-label">
                             Website
                            </label>
                            <input
                             type="test"
                             name="webside"
                             value="{{ @$single->webside }}"
                             class="form-control"
                             id="exampleInputEmail1"
                             placeholder="Webside"
                            >
                            @error('webside')<div class="alert alert-danger">{{ $message }}</div>@enderror
                        </div>
                        @if(!empty($single->id))
                           
                            <input type="submit"
                                name="submit"
                                value="Edit"
                                class="btn btn-primary"
                            >
                        @else
                            <input type="submit"
                                name="submit"
                                value="Sing in"
                                class="btn btn-primary"
                            >
                        @endif  
                    </form>
                </div>
            </div>
        </div>
    </div>
 
@endsection