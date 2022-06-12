<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\AdminPanel\AdminFriendController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\MessageController as ControllersMessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/welcome', function () {
    return view('welcome');
});
//************** Home Page Routes *******************
Route::get('/',[HomeController::class,'index'])-> name('home');
Route::get('/about',[HomeController::class,'about'])-> name('about');
Route::get('/references',[HomeController::class,'references'])-> name('references');
Route::get('/contact',[HomeController::class,'contact'])-> name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])-> name('storemessage');
Route::get('/faq',[HomeController::class,'faq'])-> name('faq');
Route::post('/storecomment',[HomeController::class,'storecomment'])-> name('storecomment');
Route::view('/loginuser','home.login')-> name('loginuser');
Route::view('/registeruser','home.register')-> name('registeruser');
Route::view('/loginadmin','admin.login')-> name('loginadmin');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::post('/loginadmincheck',[HomeController::class,'loginadmincheck'])->name('loginadmincheck');
Route::get('/posts',[PostController::class,'index'])->name('posts');
Route::post('/comment/store',[CommentController::class,'store'])->name('store');
Route::get('/users',[HomeController::class,'listUser']);
Route::get('/users/{id}',[HomeController::class,'showUser'])->name('user.show');
Route::get('/friend',[FriendController::class,'index'])->middleware('auth');
Route::get('/addfriend/{name}',[UserController::class,'addfriend'])->name('addfriend');

//************** Comment Routes *******************
Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function (){
Route::post('/store','store')->name('store');

});

//************** Reply Routes *******************
Route::prefix('/reply')->name('reply.')->controller(CommentController::class)->group(function (){
Route::post('/store', 'store')->name('store');

});

//************** Post Routes *******************
Route::prefix('/post')->name('post.')->controller(PostController::class)->group(function (){
Route::get('/posts','posts')->name('posts');
Route::get('/','index')-> name('index');
Route::get('/create','create')->name('create');
Route::post('/store','store')->name('store');
Route::get('/show/{id}','show')->name('show');
Route::get('/edit/{id}','edit')->name('edit');
Route::get('/destroy/{id}','destroy')-> name('destroy');

});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
});

//************** User Auth Control *******************
Route::middleware('auth')->group(function(){

    //************** User Panel Routes *******************
    Route::prefix('/userpanel')->name('userpanel.')->controller(UserController::class)->group(function (){
        Route::get('/','index')-> name('index');

    });

//************** Admin Panel Routes *******************
Route::middleware('admin')->prefix('/admin')->name('admin.')->group(function (){
    Route::get('/',[AdminHomeController::class, 'index'])-> name('index');
//************** General Routes *******************
    Route::get('/setting',[AdminHomeController::class, 'setting'])-> name('setting');
    Route::post('/setting',[AdminHomeController::class, 'settingupdate'])-> name('setting.update');

//************** Admin Category Routes *******************
Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function (){
    Route::get('/','index')-> name('index');
    Route::get('/create','create')-> name('create');
    Route::post('/store','store')-> name('store');
    Route::get('/edit/{id}','edit')-> name('edit');
    Route::post('/update/{id}','update')-> name('update');
    Route::get('/destroy/{id}','destroy')-> name('destroy');

});
//************** Admin Content Routes *******************
Route::prefix('/content')->name('content.')->controller(AdminContentController::class)->group(function (){
    Route::get('/','index')-> name('index');
    Route::get('/create','create')-> name('create');
    Route::post('/store','store')-> name('store');
    Route::get('/edit/{id}','edit')-> name('edit');
    Route::post('/update/{id}','update')-> name('update');
    Route::get('/destroy/{id}','destroy')-> name('destroy');

});
//************** Admin Image Gallery Routes *******************
Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function (){
    Route::get('/{pid}','index')-> name('index');
    Route::post('/store/{pid}','store')-> name('store');
    Route::post('/update/{pid}/{id}','update')-> name('update');
    Route::get('/destroy/{pid}/{id}','destroy')-> name('destroy');

});

//************** Admin Message Routes *******************
Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function (){
    Route::get('/','index')-> name('index');
    Route::get('/show/{id}','show')-> name('show');
    Route::post('/update/{id}','update')-> name('update');
    Route::get('/destroy/{id}','destroy')-> name('destroy');

});

//************** Admin FAQ Routes *******************
Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function (){
    Route::get('/','index')-> name('index');
    Route::get('/create','create')-> name('create');
    Route::post('/store','store')-> name('store');
    Route::get('/edit/{id}','edit')-> name('edit');
    Route::get('/show/{id}','show')-> name('show');
    Route::post('/update/{id}','update')-> name('update');
    Route::get('/destroy/{id}','destroy')-> name('destroy');

});

//************** Admin User Routes *******************
Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function (){
    Route::get('/','index')-> name('index');
    Route::get('/show/{id}','show')-> name('show');
    Route::post('/update/{id}','update')-> name('update');
    Route::get('/destroy/{id}','destroy')-> name('destroy');
    Route::post('/addrole/{id}','addrole')-> name('addrole');
    Route::get('/destroyrole/{uid}/{rid}','destroyrole')-> name('destroyrole');



});
//************** Friend Routes *******************
Route::prefix('/friend')->name('friend.')->controller(AdminFriendController::class)->group(function (){
    Route::get('/{slug}','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/show/{id}','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::get('/destroy/{id}','destroy')-> name('destroy');

    });
});
});
