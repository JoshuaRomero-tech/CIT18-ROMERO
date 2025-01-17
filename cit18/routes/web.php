<?php

use Illuminate\Support\Facades\Route;
use App\https\Controllers\GreetController;

Route::get('/', function () {
    return 'Hello, Laravel!';
});
          
Route::get('/greet', [GreetController::class, 'greet']);