<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});
Route::get('service', function () {
    return view('service');
});
Route::get('portfolio', function () {
    return view('portfolio');
});
Route::get('team', function () {
    return view('team');
});
Route::get('contact', function () {
    return view('contact');
});
