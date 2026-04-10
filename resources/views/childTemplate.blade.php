@extends('myLayout.master')

@section('title')
    Child Template
@endsection

@section('content')
    <div style="background-color: lightpink; border-radius: 10px; padding: 10px; margin: auto; width: 60%;">
    <h2 style="text-align: center; margin-top: 20px;">This is the Child Template</h2>
    <p style="text-align: center;">This content is defined in the child template and will be displayed in the master layout's content section.</p>
    </div>
@endsection
