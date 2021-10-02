@extends('layouts.admin')
@section('title') All Categories  @endsection
@section('content')
<div class="container col-lg-9">
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All Categories</h1>
                </div>
                <a class="btn btn-primary" href="{{route('category.create')}}">Add Category</a>
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
            <th scope="col">#ID</th>
            <th scope="col">Category Pictur</th>
            <th scope="col">Category Name</th>
            <th scope="col">Control</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th>{{$category->id}}</th>
            <td><img src="{{ asset('images/category/' . $category->category_pictur)}}" width="100px" height="100px"> </td>
            <th>{{$category->category_name}}</th>
            <td class="d-flex justify-content-between">
                <a class="btn btn-info" href="{{route('category.show' , $category->id)}}">Show</a>
                @if (Auth::user()->roles == 1)
                <a class="btn btn-warning" href="{{route('category.edit' , $category->id)}}">Edit</a>
                <form method="POST" action="{{route('category.destroy' , $category->id)}}">
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
{{$categories->links()}}
</div>
@endsection
