<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::controller(TestController::class)->group(function () {
   Route::get('/', 'index')->name('test');
   Route::get('/contract', 'contract')->name('contract');
   Route::get('/about', 'about')->name('about');
});

