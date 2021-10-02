@extends('layouts.admin')
@section('title') All Users  @endsection
@section('content')
<div class="container col-lg-9">
    <div class="row">
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">All Users</h1>
                </div>
                <a class="btn btn-primary" href="{{route('user.create')}}">Add User</a>
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
            <th scope="col">UserName</th>
            <th scope="col">Email</th>
            <th scope="col">Roles</th>
            <th scope="col">Control</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th>{{$user->name}}</th>
            <td>{{$user->email}}</td>
            <td>{{$user->roles}}</td>
            <td class="d-flex justify-content-between">
                <a class="btn btn-info" href="{{route('user.show' , $user->id)}}">Show</a>
                @if (Auth::user()->roles == 1)
                <a class="btn btn-warning" href="{{route('user.edit' , $user->id)}}">Edit</a>
                <form method="POST" action="{{route('user.destroy' , $user->id)}}">
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
<br>
<hr>
<hr>
<br>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h2>Note: When using the roles column, you must enter on following three values:</h2>
            <h4> ( 0 ) = User</h4>
            <h4> ( 1 ) = Admin</h4>
            <h4> ( 2 ) = Moderator</h4>
        </div>
    </div>
{{$users->links()}}
</div>
@endsection
