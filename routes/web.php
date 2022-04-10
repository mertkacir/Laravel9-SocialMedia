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
Route::prefix('/admin')->name('admin.')->group(function (){
    Route::get('/',[AdminHomeController::class, 'index'])-> name('index');
//************** Admin Category Routes *******************
Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function (){
    Route::get('/','index')-> name('index');
    Route::get('/create','create')-> name('create');
    Route::post('/store','store')-> name('store');
    Route::get('/edit/{id}','edit')-> name('edit');
    Route::post('/update/{id}','update')-> name('update');
    Route::get('/destroy/{id}','destroy')-> name('destroy');

});
});
