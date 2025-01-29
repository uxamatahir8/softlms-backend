<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::prefix('api')->group(function () {
    require base_path('routes/api.php');
});
