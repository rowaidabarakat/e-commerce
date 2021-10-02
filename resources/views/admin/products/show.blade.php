@extends('layouts.admin')
@section('title') Show Product  @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-5 o-hidden border-0 shadow-lg my-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Show an Product</h1>
            </div>
            <div class="card">
                <img src="{{ asset('images/product/' . $product->product_picture)}}" class="card-img-top">
                <hr>
                <div class="card-body">
                    <h3 class="card-text">{{$product->product_name}}</h3>
                </div>
                <hr>
                <div class="card-body">
                    <h3 class="card-text"><i class="fas fa-dollar-sign"> </i> {{$product->price}}</h3>
                </div>
                <div class="card-body">
                    <h3> Category ID : {{$product->category_id}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
