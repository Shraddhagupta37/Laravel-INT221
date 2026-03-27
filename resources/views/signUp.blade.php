<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <h1>Sign Up Page</h1>
  
    @if($errors->any())
        {{ $errors }};
    @endif

    <form action="/submit-signup" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Sign Up</button>
    </form> 
</div>
