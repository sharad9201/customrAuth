<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('login')->withError('Login details are not valid');
    }
    public function register_view(){
        return view('auth.register');
    }

    public function register(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        //user login

        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('home')->withError('error');
    }


    public function home(){
        return view('home');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('');

    }
}
