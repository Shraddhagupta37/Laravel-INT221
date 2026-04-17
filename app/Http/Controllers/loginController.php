<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');

        // Store the input values in the session
        $request->session()->put('username', $username);
        $request->session()->put('password', $password);
        $request->session()->put('email', $email);

        // Perform authentication logic here (e.g., check against database)

        // return response()->json([
        //     'username' => $request->session()->get('username'),
        //     'email' => $request->session()->get('email')
        // ]);

        return redirect('/welcome'); // Redirect to a welcome page after successful login
    }
}
