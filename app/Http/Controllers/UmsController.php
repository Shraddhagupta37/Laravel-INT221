<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //controller interacts with the model to fetch data from the database and pass it to the view
        $students = Student::all();  //fetching all students from the database using the model
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
