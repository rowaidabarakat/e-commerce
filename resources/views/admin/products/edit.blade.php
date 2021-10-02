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
                            <h1 class="h4 text-gray-900 mb-4">Edit an Product!</h1>
                        </div>
                        <form method="POST" action="{{route('product.update' , $product->id)}}" class="user" enctype="multipart/form-data">
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
                                    <label>product picture</label>
                                    <input type="file" class="form-control form-control-user" name="product_picture" value="{{$product->product_picture}}">
                                    @error('product_picture')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" name="product_name" value="{{$product->product_name}}">
                                @error('product_name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="price" value="{{$product->price}}">
                                    @error('price')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="category_id" value="{{$product->category_id}}">
                                    @error('category_id')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <input type="submit" value="Update Product" class="btn btn-primary btn-user btn-block">
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
