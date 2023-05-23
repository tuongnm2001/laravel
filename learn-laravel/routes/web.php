<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CarsController;

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

// Route::get('/products', 
//     [ProductController::class,'index'])->name('products');

// Route::get('/products/{name}/{id}',
//     [ProductController::class,'show'])->where([
//         'name'=>'[a-z]+',
//         'id'=>'[0-9]+'
//     ]);

// Route::get('/products/about', [ProductController::class,'about']);

// Route::get('/', [PagesController::class,'index']);
// Route::get('/about', [PagesController::class,'about']);

//Posts
// Route::get('/posts', [PostController::class,'index']);

Route::resource('/cars', CarsController::class);