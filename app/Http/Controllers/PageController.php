<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Halaman Autentikasi
    public function getLoginPage(){
        return view('autentikasi.login');
    }
    public function getRegisterPage(){
        return view('autentikasi.register');
    }


}
