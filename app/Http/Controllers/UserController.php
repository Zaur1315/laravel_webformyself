<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session()->flash('success', 'Successful registration');
        Auth::login($user);
        return redirect()->route('home');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (Auth::attempt([
            'email'=> $request->email,
            'password'=>$request->password,
        ])){
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'Incorrect Login or Password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }

    public function admin()
    {
        return view('user.admin');
    }
}
