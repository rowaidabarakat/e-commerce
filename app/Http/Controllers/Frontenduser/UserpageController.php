<?php

namespace App\Http\Controllers\Frontenduser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserpageController extends Controller
{
    //
    public function index(){
        return view("frontenduser.userpage");
    }
}
