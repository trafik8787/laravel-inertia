<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'name' => 'Vitaliy',
        'framework' => 'Laravel + Inertia + Vue 3',
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About', [
        'info' => 'Это страница About',
    ]);
});



