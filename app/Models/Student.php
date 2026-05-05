<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;  // used for MySQL (relational db), but we are using MongoDB, so we need to import the Eloquent model for MongoDB
use Mongodb\Laravel\Eloquent\Model; // Importing the Eloquent model for MongoDB

class Student extends Model
{
    protected $table = 'students';  //specifying the table name if it is different from the plural of the model name
    protected $fillable = ['regno', 'name', 'age', 'city', 'course', 'cgpa'];  //specifying the fillable attributes for mass assignment
}
