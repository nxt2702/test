<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category',[App\Http\Controllers\CategoriesController::class,'index'])->name('category.index');

Route::get('/category/create',[App\Http\Controllers\CategoriesController::class,'create'])->name('category.create');
Route::get('/category/create',[App\Http\Controllers\CategoriesController::class,'store']);

Route::get('/category/update/{category}',[App\Http\Controllers\CategoriesController::class,'edit'])->name('category.edit');
Route::get('/category/update/{category}',[App\Http\Controllers\CategoriesController::class,'update']);

Route::get('/category/delete/{id}',[App\Http\Controllers\CategoriesController::class,'delete'])->name('category.delete');



Route::get('/product',[App\Http\Controllers\ProductController::class,'index'])->name('product.index');

Route::get('/product/create',[App\Http\Controllers\ProductController::class,'create'])->name('product.create');
Route::get('/product/create',[App\Http\Controllers\ProductController::class,'store']);

Route::get('/product/update/{product}',[App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');
Route::get('/product/update/{product}',[App\Http\Controllers\ProductController::class,'update']);

Route::get('/product/delete/{id}',[App\Http\Controllers\ProductController::class,'delete'])->name('product.delete');