<html>
    <head>
        <title>Sign Up</title>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    </head>

<body>
<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <h1>Sign Up Page</h1>
  
    <!-- @if($errors->any())
        {{ $errors }};
    @endif -->

    @foreach ($errors->all() as $error) {
        <p style="color: red;">{{ $error }}</p>
    }
    @endforeach

    <form action="/submit-signup" method="POST">
        <!-- cross-site request forgery token for security -->
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <span style="color: red;">@error('name') {{ $message }} @enderror</span>
        <br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <span style="color: red;">@error('age') {{ $message }} @enderror</span>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span style="color: red;">@error('email') {{ $message }} @enderror</span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span style="color: red;">
            @foreach ($errors->get('password') as $message)
                {{  $message }}
            @endforeach
            <!-- @error('password') {{ $message }} @enderror -->
        </span>
        <br><br>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required>
        <span style="color: red;">@error('course') {{ $message }} @enderror</span>
        <br><br>

        <button type="submit">Sign Up</button>
    </form> 
</div>
</body>
</html>