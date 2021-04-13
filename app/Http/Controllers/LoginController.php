<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    public function postlogin(Request $request) {
    //    dd($request->all());
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect()->route('dashboard');
    }
        return redirect('/login');

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function registrasi() {
        return view('registrasi');
    }

    public function simpanregistrasi(Request $request) {
        User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('new');
    }

}
