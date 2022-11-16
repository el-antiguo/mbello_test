<?php

namespace App\Http\Controllers;

use App\Actions\Auth\CreateUser;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect("login");
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function processRegistration(
        CreateUser $createUser,
        Request $request
    ) {
        $createUser->create($request->all());

        return redirect("dashboard");
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
