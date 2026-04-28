<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table_name = 'items';
    //it is good practice to provide table name in the model to avoid any confusion
    //by default, laravel will look for the table name in plural form of the model name, so in this case it will look for 'items' table
    //if we want to change the table name, we can specify it in the model 
}
