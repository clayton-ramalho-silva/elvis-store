<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('site.login');
    }

    public function authenticate(Request $request)
    {

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];

        // $lembrar = empty($request->remember) ? false : true;

        // if(Auth::attempt($credentials, $lembrar)){
        //     return redirect('/');
        // }


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);




    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
