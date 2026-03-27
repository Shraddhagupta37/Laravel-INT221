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
        // Retrieve form data
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        //to request all the data from the form
        // $formData = $request->all();
        // return $formData; // returns the form data as an associative array (like a json object) to the browser

        // Here you can add code to save the user data to the database or perform other actions
        // return "Name: " . $name . "<br>Email: " . $email . "<br>Password: " . $password;
        // return response("Signup successful! Name: " . $name . ", Email: " . $email)->cookie('userEmail', $email, 1);

        //returning a javascript alert with the signup details and then redirecting to the home page
        return "<script>
        alert('Signup successful! \\nName: " . $name . ", Email: " . $email . "');
        window.location.href = '/home';
        </script>";
    }
}
