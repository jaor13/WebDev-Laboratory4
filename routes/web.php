<?php

use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


    Route::get('/', function () {
        return view('index'); //named route that returns a view for the homepage
    })->name('homepage');

    Route::redirect('/home', '/'); //redirects /home to / (which is index, named as homepage) 

    Route::group(['prefix' => 'pages'], function () {

        Route::get('/about', function () {
            return view('about'); //named route that returns a view for the about page
        })->name('about');

        Route::get('/contact-us', function () {
            return view('contact-us'); //named route that returns a view for the contact-us page
        })->name('contact-us');

        Route::get('/education-experience', function () {
            return view('education-experience');
        })->name('education-experience');//named route that returns a view for the education-experience page

        Route::get('/project-skills', function () {
            return view('project-skills');//named route that returns a view for the project-skills page
        })->name('project-skills');

    });

     /* route with required parameter
    Route::get('/user/{username}', function ($username) {
        return view('index', ['username' => $username]);
    });
    */

    /* route with optional parameter
    Route::get('/user/{username?}', function ($username = 'Guest') {
        return view('welcome_user', ['username' => $username]);
    });
    */

    Route::get('/user/{username?}', function ($username = null) { //route with regular expression constraints
        // Check if the username is valid (only alphabetic characters)
        if (!preg_match('/^[a-zA-Z]+$/', $username)) {
            $username = 'Guest';
        }
        return view('index', ['username' => $username]); //passes the $username variable to the view
    });



    Route::get('/age-verification', function () {
        return view('age-verification');
    })->name('age-verification');

    Route::get('/access-denied', function () {
        return view('access-denied');
    })->name('access-denied');

    Route::get('/dashboard', function () {
        return view('dashboard'); // Ensure you have a dashboard.blade.php view
    })->name('dashboard');
    
    Route::post('/verify-age', function (Request $request) {
        // Validate the age input
        $request->validate([
            'age' => 'required|integer|min:0',
        ]);
    
        // Get the age from the request
        $age = $request->input('age');
        $destination = $request->input('destination');

        
        // Store the age in the session
        session(['age' => $age]);
    
        // Check if the age is greater than or equal to 18
        if ($age >= 18) {
            // Redirect based on selected destination
            if ($destination === 'dashboard') {
                return redirect()->route('dashboard'); // Redirect to the dashboard
            } else if ($destination === 'source-code') {
                return redirect()->route('source-code'); // Redirect to the source code
            }
              else if ($destination === 'code-tutorials') {
                return redirect()->route('code-tutorials'); // Redirect to the source code
            }
              else{
                return redirect()->route('access-denied');
            }
            }
    
        return redirect()->route('access-denied'); // Redirect to "Access Denied" page if underage
    })->name('verify-age');

    // Route::middleware(['check_age'])->group(function () {
    //     Route::get('/dashboard', function () {
    //         return view('dashboard'); // This route will be protected
    //     })->name('dashboard');

    //     Route::get('/source-code', function () {
    //         return view ('source-code'); // resticted content that requires age verification
    //     })->name('source-code');
    // });


 

    Route::get('/dashboard', function () {
        return view('dashboard'); // Your dashboard view
    })->middleware('check_age:18')->name('dashboard');
    
    // Route for restricted source code page with age restriction of 18
    Route::get('/source-code', function () {
        return view('source-code'); // Your source code view
    })->middleware('check_age:18')->name('source-code');
    
    // New route for a different age restriction (e.g., 21 years old)
    Route::get('/code-tutorials', function () {
        return view('code-tutorials'); // Your restricted area view
    })->middleware('check_age:21')->name('code-tutorials');