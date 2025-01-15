<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
public function forgotPassword(){
        return view('user.forgot-password');
    }

    public function login(){
        return view('user.login');
    }
    public function checkout(){
        return view('user.checkout');
    }
public function userDashboard(){
    return view('user.dashboard');
}

}
