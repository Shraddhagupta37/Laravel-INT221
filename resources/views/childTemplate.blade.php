@extends('myLayout.master')

@section('title')
    Child Template
@endsection

@section('content')
    <h2 style="text-align: center; margin-top: 20px;">This is the Child Template</h2>
    <p style="text-align: center;">This content is defined in the child template and will be displayed in the master layout's content section.</p>
    <div style="text-align: center; margin-top: 20px;">
        <a href="https://lpu.in/" target="_blank" style="padding: 10px 20px; background-color: lightblue; color: black; text-decoration: none; border-radius: 5px;">Visit LPU Website</a>
    </div>
@endsection
