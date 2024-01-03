<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\WithoutSpace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
    }

    public function login()
    {
        return view('login');
    }

    public function attempt(Request $request)
    {
        $credentials = $request->validate([
            "username" => ["required"],
            "password" => ["required"]
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with(["error" => "Username or Password is Incorrect!"]);
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "min:2", "max:255"],
            "username" => ["required", "min:2", "max:255", new WithoutSpace],
            "password" => ["required", "min:6", "max:255"]
        ]);

        $validated["username"] = StrtoLower($validated["username"]);
        $validated["password"] = bcrypt($validated["password"]);

        User::create($validated);
        return redirect()->intended('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
