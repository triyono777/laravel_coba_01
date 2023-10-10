<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/mahasiswa/fikom/budi', function () {
    echo '<h2 style="text-align: center"><u>Hallo budi</u></h2>';
});

