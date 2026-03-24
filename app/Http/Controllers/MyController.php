<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyController extends Controller
{
    // method to return a simple string
    public function index()
    {
        return "Hello from MyController!";
    }

    public function show() {
        return view('homePage');
    }
}
