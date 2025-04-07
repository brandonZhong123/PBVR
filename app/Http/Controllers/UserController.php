<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function login() {
        return view ('users/login');
    }

    public function register() {
        return view ('users/register');
    }

    public function authenticate(Request $request) {

        $formFields = $request->validate([
            "email"=> ["required","email"],
            "password"=> "required",
        ]);
        
 
        if (Auth::attempt($formFields)) {
            $request->session()->regenerate();

            return redirect("/dashboard")->with("message","You are now logged in");
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput();
    }

    public function store(Request $request) {
  
        $formFields = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);


        $formFields["password"] = bcrypt($formFields["password"]);

        $user = User::create($formFields);
        Auth::login($user);

        return redirect("/dashboard")->with('success',"You are now registered and logged in");
    }

    public function logout(Request $request) {
 
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
