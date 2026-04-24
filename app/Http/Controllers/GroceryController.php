<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class GroceryController extends Controller
{
    public function getItems() {
        // return "Fetching grocery items from the database...";

        $items = Item::all();   //interaction of controller with the model to fetch all items from the database
        // return response()->json($items);
        return view('groceryItems', compact('items'));   //passing the items to the view
    }
}
