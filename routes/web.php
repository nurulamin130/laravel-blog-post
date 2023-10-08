<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use  App\Http\Controllers\BlogController;
use App\Http\Controllers\VisitorAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

route::get('/',[HomeController::class,'index'])->name('home');
route::get('/about',[HomeController::class,'about'])->name('about');
route::get('/category',[HomeController::class,'category'])->name('category');
route::get('/contact',[HomeController::class,'contact'])->name('contact');
route::get('/single-post',[HomeController::class,'singlePost'])->name('single-post');
route::get('/blog/details/{slug}',[HomeController::class,'blogDetails'])->name('blog.details');

Route::get('/visitor/signup',[VisitorAuthController::class,'signupView'])->name('signupView');
Route::post('/visitor/signup',[VisitorAuthController::class,'signup'])->name('signup');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    route::resources(['categories'=>CategoryController::class]);
    route::resources(['blogs'=>BlogController::class]);
});


