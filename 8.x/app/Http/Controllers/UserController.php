<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin() { return view("home"); }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            "username" => ["required", "string"],
            "password" => ["required", "string"]
        ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect("/page1");
        }
        return redirect("/")->withErrors(["loginError" => "Incorrect username and password"]);
    }
    public function showRegister() { return view("register"); }
    public function register(Request $request)
    {
        $incomingData = $request->validate([
            "username" => ["required", "string", "unique:users", "max:255"],
            "email" => ["required", "string", "email", "unique:users"],
            "password" => ["required", "min:3"]
        ]);
        $incomingData["password"] = bcrypt($incomingData["password"]);
        $user = User::create($incomingData);
        return redirect("/");
    }
    public function page1() { return view("page1"); }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}

?>