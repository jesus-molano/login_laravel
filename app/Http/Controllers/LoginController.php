<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (!Auth::validate($credentials)) {
            return redirect('/login')->with('error', 'Invalid credentials');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request, $user);
    }
    public function authenticated(Request $request, $user)
    {
        return redirect('/');
    }
}
