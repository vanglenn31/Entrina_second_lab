<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('landing/index');
})->name('index');

Route::resource('addProd', ProductController::class);
