<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

// use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function products(){
        return view('admin.products');
    }
    public function orders(){
        return view('admin.orders');
    }
    public function show(){
        return view('admin.order-details');
    }

    public function create(){
        return view('admin.create-product');
    }
    public function customers(){
        return view('admin.customers');
    }



    public function showAdminRegistrationForm()
    {
        return view(view: 'admin.admin-register'); // Render the Blade file for admin registration
    }







    public function adminRegister(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'username' => ['required','string', 'lowercase', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'admin', // set role to admin
        ]);

        event(new Registered($admin));

        Auth::login($admin);

        return redirect()->route('admin.dashboard'); // Redirect to
    }
}
