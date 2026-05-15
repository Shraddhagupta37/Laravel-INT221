<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function fetchapi() {
        $response = Http::get("https://dummyjson.com/quote");
        $quotes = $response->json()['quotes'];
        return view('quotesPage', compact('quotes'));
        // return $quotes;
    }
}
