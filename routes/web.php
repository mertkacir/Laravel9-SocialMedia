<?php

use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/',[HomeController::class,'index'])-> name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin',[AdminHomeController::class, 'index'])-> name('admin');

