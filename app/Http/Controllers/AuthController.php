<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postLogin(Request $request){
        if(!auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return redirect()->back();
        }
        return redirect()->route('home');

    }

    public function postRegister(Request $request){
        $this->validate($request, [
            'username' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        //User login otomatis setelah register
        auth()->loginUsingId($user->id);

        return redirect()->route('home');
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('login');
    }
}
