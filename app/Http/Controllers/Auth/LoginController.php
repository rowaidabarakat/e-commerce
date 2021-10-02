<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    //Google login
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    // Google callcack
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);
        // Return hom after login
        return redirect()->route('home');
    }

    // Github login
    public function redirectToGithub(){
        return Socialite::driver('github')->redirect();
    }

    // Github callcack
    public function handleGithubCallback(){
        $user = Socialite::driver('github')->user();

        $this->_registerOrLoginUser($user);
        // Return hom after login
        return redirect()->route('home');
    }

    protected function _registerOrLoginUser($date){
        $user = User::where('email','=',$date->email)->first();
        if(!$user){
            $user = new User();
            $user->name = $date->name;
            $user->email = $date->email;
            $user->provider_id = $date->id;
            $user->avatar = $date->avatar;
            $user->save();
        }

        Auth::login($user);
    }

}
