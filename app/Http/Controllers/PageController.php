<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //Halaman Autentikasi
    public function getLoginPage(){
        return view('autentikasi.login');
    }
    public function getRegisterPage(){
        return view('autentikasi.register');
    }

    //halaman profile
    public function getProfilePage(){
        return view('profile');
    }
    public function getStoreProfilePage(){
        return view('store-profile');
    }

}
