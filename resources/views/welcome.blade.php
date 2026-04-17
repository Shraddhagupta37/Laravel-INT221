<!-- applying template inheritance by etending master layout -->
@extends('myLayout.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')Welcome Page @endsection</title>
</head>
<body>
    @section('content')
        <h1 style="text-align: center;"> {{ __('welcome.heading') }} </h1>
        <p style="text-align: center;"> {{ __('welcome.subheading') }} </p>
        <div style="text-align: center; margin-top: 20px;">
            <a href="https://lpu.in/" target="_blank" style="padding: 10px 20px; background-color: lightblue; color: black; text-decoration: none; border-radius: 5px;">Visit LPU Website</a>
        </div>
    @endsection

    @section('session-user')
        <div style="margin-top: 30px;">
            @if(!session('username'))
                <h3 style="text-align: center;">You are not logged in.</h3>
                <form method="get" action="/login">
                    <button style="padding: 10px 20px; background-color: lightgreen; color: black; border: none; border-radius: 5px; cursor: pointer;">Login</button>
                </form>
            @endif

            @if(session('username'))
                <h2 style="text-align: center;">Welcome, {{ session('username') }}!</h2>

                <form method="get" action="/logout">
                    <button style="padding: 10px 20px; background-color: lightcoral; color: black; border: none; border-radius: 5px; cursor: pointer;">
                        Logout
                    </button>
                </form>
            @endif
        </div>
    @endsection
</body>
</html>