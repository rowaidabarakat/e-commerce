@extends('layouts.admin')
@section('title') Edit Product  @endsection
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit an Category!</h1>
                        </div>
                        <form method="POST" action="{{route('category.update' , $category->id)}}" class="user" enctype="multipart/form-data">
                            <div class="row">
                                @if (Session::has('success'))
                                    <div class="card col-lg-12 mb-4 py-3 border-left-success">
                                        <div class="card-body">
                                            {{Session::get('success')}}
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group row">
                                @csrf
                                {{@method_field('PUT')}}
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label>category picture</label>
                                    <input type="file" class="form-control form-control-user" name="category_picture" value="{{$category->category_picture}}">
                                    @error('category_picture')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="category_name" value="{{$category->category_name}}">
                                @error('category_name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <input type="submit" value="Update Category" class="btn btn-primary btn-user btn-block">
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
