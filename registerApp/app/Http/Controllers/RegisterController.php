<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // Show the registration form
    public function showForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Redirect to the register page (named route 'register')
        return redirect()->route('register')->with('success', 'Registration successful!');
    }


}
