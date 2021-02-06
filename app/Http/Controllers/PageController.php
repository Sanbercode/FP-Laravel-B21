<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


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
        if(session('success_message')){
            Alert::success('Success', session('success_message'));
        }
        if(session('delete_message')){
            Alert::success('Success', session('delete_message'));
        }
        return view('profile');
    }
    public function getStoreProfilePage(){
        return view('store-profile');
    }

    public function getLandingPage(){
        return view('partials.landpage');
    }

    public function getHomePage(){
        return view('partials.home');
    }

}
