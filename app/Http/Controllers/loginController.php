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

        return redirect('/'); // Redirect to a welcome page after successful login
    }

    public function logout(Request $request)
    {
        // Clear the session data
        $request->session()->flush();

        // Alternatively, you can also forget specific session keys instead of flushing the entire session
        // $request->session()->forget('username');
        // $request->session()->forget('email');
        // $request->session()->forget('password');

        // You can also use the pull method to retrieve and delete a specific session value in one step
        //session()->pull('username')->pull('email')->pull('password'); 

        return redirect('/'); // Redirect to the welcome page after logout
    }
}
