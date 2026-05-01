<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Mongodb\Laravel\Eloquent\Model as Eloquent; // Importing the Eloquent model for MongoDB

class Student extends Eloquent
{
    protected $table = 'students';  //specifying the table name if it is different from the plural of the model name
    protected $fillable = ['regno', 'name', 'age', 'city', 'course', 'cgpa'];  //specifying the fillable attributes for mass assignment
}
