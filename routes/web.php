<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'name'=> 'Amrila',
        'age'=> 20,
    ]);
});

Route::get('/hello', function() {
    return 'Hello World!';
});
