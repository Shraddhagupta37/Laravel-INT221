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
}
