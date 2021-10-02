@extends('layouts.admin')
@section('title') Show User @endsection
@section('content')
<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Show an User</h1>
                    </div>
                    <form class="user">
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="name" value="{{$user->name}}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" value="{{$user->email}}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="roles" value="{{$user->roles}}" disabled>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
