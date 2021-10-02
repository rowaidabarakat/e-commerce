@extends('layouts.admin')
@section('title') Show Category  @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 p-5 o-hidden border-0 shadow-lg my-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Show an Category</h1>
                </div>
                <div class="card">
                    <img src="{{ asset('images/category/' . $category->category_pictur)}}" class="card-img-top">
                    <hr>
                    <div class="card-body">
                        <h3 class="card-text">{{$category->category_name}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
