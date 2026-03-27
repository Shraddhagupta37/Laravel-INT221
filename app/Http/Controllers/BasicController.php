<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    //function to return a simple string
    public function greet() {
        return "Hello from BasicController!";
    }

    public function show() {
        return view('studentLogin');
    }

    public function signUp() {
        return view('signUp');
    }

    public function submitSignup(Request $request) {
        // validate the form data
        $request->validate([
            'name' => 'required|string|min:2|max:50|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.+[_#$!@])[A-Za-z\d_#$!@]$/',
        ]);

        // Retrieve form data
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // to request all the data from the form
        // $formData = $request->all();
        // return $formData; // returns the form data as an associative array (like a json object) to the browser

        // to return few specific data from the form
        // return response()->json([
        //     'name' => $request->name,
        //     'email' => $request->email
        // ]);

        // Here you can either save the user data to the database, setup authentication, or perform other actions
        // return "Name: " . $name . "<br>Email: " . $email . "<br>Password: " . $password;
        // return response("Signup successful! Name: " . $name . ", Email: " . $email)->cookie('userEmail', $email, 1);

        //returning a javascript alert with the signup details and then redirecting to the home page
        return "<script>
        alert('Signup successful! \\nName: " . $name . ", Email: " . $email . "');
        window.location.href = '/home';
        </script>";
    }
}
