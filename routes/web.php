
<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
});

// About page
Route::get('/about', function () {
    return view('about');
});

// Services page
Route::get('/services', function () {
    return view('services');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});

// Existing course route
Route::get('/course/{code}/{section}', function ($code, $section) {
    return "<h1>Course Enrollment</h1><p>Viewing details for Course: " . strtoupper($code) . " | Section: " . $section . "</p>";
});

// Existing admin dashboard route
Route::get('/admin-dashboard', function () {
    return "<h1>Admin Dashboard</h1><p>Access granted. Welcome, Administrator.</p>";
})->middleware('checkRole');

// Existing fallback route
Route::fallback(function () {
    return "<h1>404 Error</h1><p>The lab route you attempted to access does not exist.</p>";
});
