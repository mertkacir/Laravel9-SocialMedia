<?php

use App\Http\Controllers\AdminPanel\CategoryController;
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

//************** Admin Panel Routes *******************
Route::get('/admin',[AdminHomeController::class, 'index'])-> name('admin');
//************** Admin Category Routes *******************
Route::get('/admin/category',[CategoryController::class, 'index'])-> name('admin_category');
Route::get('/admin/category/create',[CategoryController::class, 'create'])-> name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class, 'store'])-> name('admin_category_store');


