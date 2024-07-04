<?php

use Illuminate\Support\Facades\Route;

Route::middleware(["track"])->group(function () {
    Route::get('/', function () {
        return redirect("/invitation");
    });
    Route::get('/invitation', function () {
        return view('home/home');
    });
});