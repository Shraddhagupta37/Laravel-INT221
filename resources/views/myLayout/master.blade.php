<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header style="background-color: lightblue; text-align:center; padding: 10px; position: fixed; top: 0; width: 100%;">
        <h1>LOVELY PROFESSIONAL UNIVERSITY</h1>
    </header>

    <nav style="background-color: lightgray; padding: 10px; margin-top: 100px;">
        <ul style="list-style-type: none; display: flex; justify-content: center; gap: 20px;">
            <li><a href="/">Welcome</a></li>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/childtemplate">Child Template</a></li>
            <li><a href="/dashboard/2026">Dashboard</a></li>
        </ul>
    </nav>

    <div style="margin-top: 150px; margin-bottom: 40px; text-align: center;">
        @yield('content')
        @yield('session-user')
    </div>

    <footer style="background-color: lightgray; text-align: center; padding: 10px; position: fixed; bottom: 0; width: 100%;">
        <p>&copy; 2024 Lovely Professional University. All rights reserved.</p>
        <a href="https://lpu.in/" target="_blank">Visit LPU Website</a>
    </footer>
</body>
</html>