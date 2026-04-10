<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//import the controllers to use them in the routes
use App\Http\Controllers\MyController;
use App\Http\Controllers\BasicController;

Route::get('/', function () {
    return view('welcome');
});

// route returning a simple string
Route::get('/hello', function () {
    return '<h1 style="color:purple; text-decoration:underline">
    Hello World!
    </h1>';
});

// subrouting (routes within routes)
Route::get('/lpu/course/btech', function () {
    return "You are enrolled in BTech course at LPU";
});

// passing single parameter in route
Route::get('/lpu/course/{course_name}', function ($course_name) {
    //ucfirst() function is used to capitalize the first letter of the string
    return "<h1 style='color:green; font-weight:bold; font-size:30px; text-align:center'>
    You are enrolled in <span style='color:blue'>" . ucfirst($course_name) . "</span> course at LPU
    </h1>";  
});

// passing multiple parameters in route
Route::get('/lpu/course/{course_name}/{semester}', function ($course_name, $semester) {
    return "<h1 style='color: orange; font-weight: bold; font-size: 30px; text-align: center'>
    You are enrolled in <span style='color:purple'>" . ucfirst($course_name) . "</span> course at LPU and you are in <span style='color:purple'>" . $semester . "</span> semester.
    </h1>";
});

Route::get('/welcome/{name}/{age}', function ($name, $age) {
    return response(
        "Welcome to LPU, " . ucfirst($name) . "! <br>You are " . $age . " years old."
    );
});

// route with default parameter value
Route::get('/welcome/{name?}', function ($name = 'Guest') {
    return "<h1 style='color:blue; font-size: 30px; text-align:center'>
    Welcome to LPU, " . ucfirst($name) . "!
    </h1>";
});

// route accepting 2 numeric parameters and returning their sum
Route::get('add/{num1?}/{num2?}', function ($num1 = 0, $num2 = 0) {
    $sum = $num1 + $num2;
    return "The sum of $num1 and $num2 is: $sum";
});

// route accepting a number and returning its multiplication table
Route::get('table/{num}', function ($num) {
    $table = "<h1 style='color:blue; text-align:center'>
    Multiplication Table of $num
    </h1><br>";

    for ($i = 1; $i <= 10; $i++) {
        $table .= "$num x $i = " . ($num * $i) . "<br>";
    }

    return $table;
});

// route returning a course list
Route::get('/lpu/courses', function () {
    $courses = ['BTech', 'MTech', 'MBA', 'BBA', 'BCA', 'MCA', 'BSc', 'MSc', 'PhD'];
    $courseList = "<h1 style='color:green; text-align:center'>
    List of Courses at LPU
    </h1><div style='text-align: center; background-color: cyan; padding: 20px;'>";

    foreach ($courses as $course) {
        $courseList .= "- " . $course . "<br>";
    }
    return $courseList. "</div>";
});

// route returning json response
Route::get('/lpu', function () {
    $data = [
        'name' => 'LPU',
        'location' => 'Punjab',
        'established' => 2005,
        'courses' => ['BTech', 'MTech', 'MBA', 'BBA', 'BCA', 'MCA', 'BSc', 'MSc', 'PhD']
    ];
    return response()->json($data);
});

// route downloading a file
Route::get('/download', function () {
    $filePath = public_path('myFiles/sample.txt');
    return response()->download($filePath);

    //or:
    // return response()->download('../public/myFiles/sample.txt');
}); 

// route redirecting to another url
Route::get('/redirect', function () {
    // return redirect('https://google.com');  // this will redirect to google.com but the url in the browser will still show /redirect
    return redirect()->away('https://google.com');  // this will redirect to google.com and the url in the browser will also show google.com
});

// route returning a view (blade file)
Route::get('/about', function () {
    return view('aboutUs');
});


// route redirection
Route::get('/admin', function () {
    return redirect('/student');
});

Route::get('/student', function () {
    return response("Welcome to the student dashboard!");
});

// laravel redirections: for authorization and authentication
Route::get('/dashboard/admin', function () {
    return redirect('/dashboard/student-login');
});

Route::get('/dashboard/student-login', function () {
    return view('studentLogin');
});

Route::post('/dashboard/student', function () {
    return response("Welcome to the student dashboard!");
});


// attaching headers to a route
//headers are used to pass additional information with the response (metadata)
//for example, we can send the information about the author of the page, the description of the page, the keywords for the page, etc. using headers
//seen in network tab in browser's developer tools
Route::get('/headers', function () {
    return response("This is a page with custom headers")
        ->header('Author', 'Me')
        ->header('Description', 'This page is used to demonstrate how to attach headers to a route in Laravel')
        ->header('Keywords', 'Laravel, Headers, Route')
        ->header('Developed_in_Year', '2026');
}); //attach in the landing page


// passing data to a view
Route::get('/passdata', function () {
    $name = 'Shraddha';
    $age = 22;
    return view('passData', compact('name', 'age')); //using compact()
    // return view('passData', ['name' => $name, 'age' => $age]); //using associative array
    // return view('passData')->with('name', $name)->with('age', $age); //using with() chaining 
    // return view('passData')->withName($name)->withAge($age); //using with() chaining with dynamic method names
});

Route::get('/products', function () {
    $products = [
        "product1" => [
            'name' => 'Laptop',
            'price' => 50000,
            'description' => 'A high-performance laptop for all your computing needs.',
            'stock' => 10
        ],

        "product2" => [
            'name' => 'Smartphone',
            'price' => 20000,
            'description' => 'A sleek smartphone with the latest features and a stunning display.',
            'stock' => 25
        ],

        "product3" => [
            'name' => 'Headphones',
            'price' => 3000,
            'description' => 'Noise-cancelling headphones for an immersive audio experience.',
            'stock' => 15
        ]
    ];

    return view('productPage', compact('products'));
});

route::get('/home', function () {
    return view('homePage');
});


// route returning result view
Route::get('/results/2025', function() {
    $students = [
        ['name' => 'Shraddha', 'roll' => '101', 'cgpa' => 8.5],
        ['name' => 'Rahul', 'roll' => '102', 'cgpa' => 7.2],
        ['name' => 'Anjali', 'roll' => '103', 'cgpa' => 6.9],
        ['name' => 'Vikram', 'roll' => '104', 'cgpa' => 6.1],
        ['name' => 'Pooja', 'roll' => '105', 'cgpa' => 9.1],
        ['name' => 'Amit', 'roll' => '106', 'cgpa' => 5.8],
        ['name' => 'Sneha', 'roll' => '107', 'cgpa' => 7.8],
        ['name' => 'Rohit', 'roll' => '108', 'cgpa' => 8.0],
        ['name' => 'Neha', 'roll' => '109', 'cgpa' => 6.5],
        ['name' => 'Arjun', 'roll' => '110', 'cgpa' => 7.0]
    ];
    return view('results', compact('students'));
});


// route storing a cookie
//cookies are used to store small pieces of data on the client's browser. They are commonly used for session management, personalization, and tracking user behavior.
//cookie values are stored in the application layer 
Route::get('/setcookie', function () {
    return response("Cookie has been set!")->cookie('user', 'Shraddha', 1); //cookie name, cookie value, cookie duration in minutes
});

// route retrieving a cookie
Route::get('/getcookie', function () {
    $cookieValue = request()->cookie('user'); //retrieving the value of the cookie
    return "The value of the 'user' cookie is: " . $cookieValue;
});

// route deleting a cookie
Route::get('/deletecookie', function () {
    return response("Cookie has been deleted!")->cookie('user', '', -1); //setting the cookie value to empty and duration to negative to delete the cookie
});


// route setting cookie from a form input
Route::get('/getcookieform', function () {
    return view('setCookieForm');
});

Route::post('/setcookieform', function () {
    $username = request('username'); //retrieving the value from the form input
    return response("Cookie has been set with value: " . $username)->cookie('user', $username, 1); //setting the cookie with the value from the form input
});


// route using controller
Route::get('/controller', [MyController::class, 'index']);
Route::get('/controller/show', [MyController::class, 'show']);

Route::get('/basiccontroller', [BasicController::class, 'greet']);
Route::get('/basiccontroller/login', [BasicController::class, 'show']);
Route::get('/signup', [BasicController::class, 'signUp']);
Route::post('/submit-signup', [BasicController::class, 'submitSignup']);


// route grouping
Route::prefix('lpu')->group(function () {
    Route::get('/courses', function () {
        return "<h1>List of courses at LPU</h1>";
    });

    Route::get('/admissions', function () {
        return "<h1>Admissions information for LPU</h1>";
    });

    Route::get('/contact', function () {
        return "<h1>Contact information for LPU</h1>";
    });
});


// named route
Route::get('/lpu/dasboard/2026', function() {
    return view('landingPage');
})->name('dash');


// // CA
// Route::get('/dashboard/{role}', function ($role) {
//     if ($role == 'admin') {
//         return view('adminDashboard');
//     } elseif ($role == 'user') {
//         return view('userDashboard');
//     } else {
//         return "<h1>Access Denied!</h1>";
//     }
// });


Route::get('/childtemplate', function () {
    return view('childTemplate');
});