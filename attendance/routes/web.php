<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Day5', function () {
    return view ('Day5/farewell');
});

Route::get('Day5', function () {
    return view ('Day5/farewell');
});

Route::get('/farewell' , function () {
    $name = 'Lumbani';
    return view ('Day5/farewell', ['$name']);
});

Route::get('/farewell' , function () {
    return view ('Day5/farewell', ['name'=>'Lumbani', 'home'=>'Area 18']);

});