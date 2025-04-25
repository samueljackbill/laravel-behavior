<?php

use App\Http\Controllers\BehaviorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');