<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class GroceryController extends Controller
{
    public function getItems() {
        // return "Fetching grocery items from the database...";

        $items = Item::all(); 
        $items = Item::orderBy('price', 'desc')->get();
        //interaction of controller with the model to fetch all items from the database
        //eloquent ORM (Object Relational Mapping) is used to interact with the database, it provides a simple and elegant way to work with the database, it allows us to perform CRUD operations without writing raw SQL queries, and obtains the table as the plural od model name by default, but we can specify it in the model if we want to change it

        // return response()->json($items);
        return view('groceryItems', compact('items'));   //passing the items to the view
    }

    public function getNamePrice() {
        //fetching only name and price columns from the database
        $itemsNamePrice = Item::all(['name', 'price']);   
        $itemsNamePrice = Item::select('name', 'price')->get();   

        //where, whereNot, whereBetween, whereIn, whereNotIn:
        $items = Item::where('price', '>', 10)->where('quantity', '>', 10)->WhereNot('price', '=', 5)->get();  //where clause can be chained to apply filters to the data 

        //aggregate functions:
        $count = Item::count();   
        $avgPrice = Item::avg('price');   
        $maxPrice = Item::max('price');
        $minPrice = Item::min('price');
        $totalValue = Item::sum('price');
        
        return view('groceryNamePrice', compact('items', 'itemsNamePrice', 'count', 'avgPrice', 'maxPrice', 'minPrice', 'totalValue'));
    }
}
