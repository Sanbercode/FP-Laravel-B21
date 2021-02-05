<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function storeProfile(Request $request){
        $this->validate($request, [
           'name' => 'required|min:5',
            'address' => 'required',
            'job' => 'required',
            'umur' => 'required'
        ]);

        //update profile
        $profil = Profile::updateOrCreate(
            ['user_id' => Auth::id()],
            ['nama' => $request -> name,
                'umur' => $request ->umur,
                'pekerjaan' => $request -> job,
                'alamat' => $request -> address]
        );
       return redirect('/profile');
    }

}
