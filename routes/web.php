<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first-copilot-with-my-pc', function()
{
    return 'Hello, this is my first Copilot with my PC';
});
