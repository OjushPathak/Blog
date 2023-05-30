<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Controller
Route::get('/', function () {
    return view('blog.show_blog');
});
Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

// Blog Controller
Route::get('/add_posts',[BlogController::class,'add_posts'])->middleware('auth','verified');

Route::post('/post_blog',[BlogController::class,'post_blog'])->middleware('auth','verified');

Route::get('/view_posts',[BlogController::class,'view_posts'])->middleware('auth','verified');

Route::get('/delete_post/{id}',[BlogController::class,'delete_post'])->middleware('auth','verified');

Route::get('/update_post/{id}',[BlogController::class,'update_post'])->middleware('auth','verified');

Route::post('/update_post_confirm/{id}',[BlogController::class,'update_post_confirm'])->middleware('auth','verified');

// Categories Controller
Route::get('/view_categories',[CategoryController::class,'view_categories'])->middleware('auth','verified');

Route::post('/update_category/{id}',[CategoryController::class,'update_category'])->middleware('auth','verified');

Route::post('/add_category',[CategoryController::class,'add_category'])->middleware('auth','verified');

Route::get('/delete_category/{id}',[CategoryController::class,'delete_category'])->middleware('auth','verified');