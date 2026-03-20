<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1 style="font-weight:bold">Home Page</h1>

    <!-- using the global variable, specified in the app/Providers/AppServiceProvider -->
    <h2 style="color:orange; font-weight:bold">{{ $University }}</h2> 
    <p style="font-size:20px;">This is the home page of {{ $University }}. 
        It is located in {{ $Location }}. 
        For more details, visit the <a href="{{ $Link }}" target="_blank">official website</a>.
    </p>
    
    <img src="{{ asset('myImages/LPU logo.webp') }}" alt="Home Image" height="500px" width="700px">
</div>
