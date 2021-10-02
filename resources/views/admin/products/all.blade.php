@extends('layouts.admin')
@section('title') All Products  @endsection
@section('content')
<div class="container col-lg-9">
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All Products</h1>
                </div>
                <a class="btn btn-primary" href="{{route('product.create')}}">Add Product</a>
            </div>
        </div>
    </div>
    @if (Session::has('success'))
            <div class="card col-lg-12 py-3 border-left-success">
                <div class="card-body">
                    {{Session::get('success')}}
                </div>
            </div>
        @endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">Product Picture</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category ID</th>
            <th scope="col">control</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th> <img src="{{ asset('images/product/' . $product->product_picture)}}" width="100px" height="100px"></th>
            <td>{{$product->product_name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category_id}}</td>
            <td class="d-flex justify-content-between">
                <a class="btn btn-info" href="{{route('product.show' , $product->id)}}">Show</a>
                @if (Auth::user()->roles == 1)
                <a class="btn btn-warning" href="{{route('product.edit' , $product->id)}}">Edit</a>
                <form method="POST" action="{{route('product.destroy' , $product->id)}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" class="btn btn-danger" value="delete">
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$products->links()}}
</div>
@endsection
