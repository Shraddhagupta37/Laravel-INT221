<?php

//path of Controller:
namespace App\Http\Controllers;

//request class to handle HTTP requests from the server
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
