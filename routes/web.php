<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Home
Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

// Services
Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');

// Portfolio
Route::get('/portfolio', function () {
    return view('frontend.pages.portfolio');
})->name('portfolio');

// Academy
Route::get('/academy', function () {
    return view('frontend.pages.academy');
})->name('academy');

// Courses
Route::get('/courses', function () {
    return view('frontend.pages.courses');
})->name('courses');

// Internship
Route::get('/internship', function () {
    return view('frontend.pages.internship');
})->name('internship');

// Ambassador
Route::get('/ambassador', function () {
    return view('frontend.pages.ambassador');
})->name('ambassador');

// About
Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

// Contact
Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');