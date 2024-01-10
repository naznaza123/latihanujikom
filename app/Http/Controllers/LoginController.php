<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view ('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::attempt($infologin)){
            echo "berhasil login";
        }else{
            return redirect('/')->withErrors('Email dan password salah')->withInput();
        }
    }
}
