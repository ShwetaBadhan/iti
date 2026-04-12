<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/chairman-message', function () {
    return view('pages.chairman-message');
})->name('chairman-message');

Route::get('/our-team', function () {
    return view('pages.our-team');
})->name('our-team');

Route::get('/our-campus', function () {
    return view('pages.our-campus');
})->name('our-campus');


Route::get('/results', function () {
    return view('pages.results');
})->name('results');



Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');



Route::get('/our-courses', function () {
    return view('pages.our-courses');
})->name('our-courses');

Route::get('/course-details', function () {
    return view('pages.course-details');
})->name('course-details');



Route::get('/our-blogs', function () {
    return view('pages.our-blogs');
})->name('our-blogs');

Route::get('/blog-details', function () {
    return view('pages.blog-details');
})->name('blog-details');

