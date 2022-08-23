@extends('admin.layouts.master')

@section('content')

@include('admin.components.header')

       @if(session('msg'))
        
         <div class="alert alert-success">
       
          {{session('msg')}}

         </div>
         
       @endif
   


        <div>
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 ">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Login</h6>
                        <form action="{{ url('/checklogin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">
                                    Enter email 
                                </label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter YOur email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">
                                    Enter Password
                                </label>
                                <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter YOur Password">
                            </div>
                            <input type="submit" name="submit" value="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection