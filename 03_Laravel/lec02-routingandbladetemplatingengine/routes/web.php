<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Basic Route (Without Parameter)
|--------------------------------------------------------------------------
| This route loads the default welcome view when user visits '/'
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Simple Static Route
|--------------------------------------------------------------------------
| This route returns the 'about' view
*/
Route::get('/about', function () {
    return view('about');
});

/*
|--------------------------------------------------------------------------
| Another Static Route
|--------------------------------------------------------------------------
| Loads profile view on '/abuhurerah'
*/
Route::get('/abuhurerah', function () {
    return view('profile');
});

/*
|--------------------------------------------------------------------------
| Nested View Route
|--------------------------------------------------------------------------
| Loads view from resources/views/user-dashboard/user.blade.php
*/
Route::get('/user-dashboard/user', function () {
    return view('user-dashboard.user');
});

/*
|--------------------------------------------------------------------------
| Route with Required & Optional Parameters
|--------------------------------------------------------------------------
| {id} is required
| {username?} is optional and default value is "Guest"
*/
Route::get('/info/{id}/{username?}', function($id, $username = "Guest") {
    echo "ID: " . $id . "<br>";
    echo "Username: " . $username;
});

/*
|--------------------------------------------------------------------------
| Route with Parameter + Data Passing to View
|--------------------------------------------------------------------------
| Passing data using compact() method
*/
Route::get('/home/{student}', function($student) {

    // Simple variable
    $email = "aptech@gmail.com"; 

    // compact() creates array ['student' => $student, 'email' => $email]
    $data = compact('student', 'email');

    // Sending data to index view
    return view('index')->with($data);
});
