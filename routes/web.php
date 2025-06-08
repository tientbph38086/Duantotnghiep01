<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    // return view('welcome');
    return view('dasboard');
});
Route::get('/', function () {
    // return view('welcome');
    return view('client');
});
