<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


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

Route::get('register', function () {
    return view('admin.register');});

Route::get('addCategory',[CategoryController::class,'addCategoryfunc']);
Route::get('Category',[CategoryController::class,'CategoryViewfunc']);

Route::post('addcategoryPost',[CategoryController::class,'addCategoryPostfunc']);

Route::get('showCategory',[CategoryController::class,'showCategoryfunc']);


Route::get('addProduct',[ProductController::class,'addProductfunc']);

Route::post('addProductPost',[ProductController::class,'addProductPostfunc']);

Route::get('showProduct',[ProductController::class,'showProductfunc']);

Route::get('Product', function () {
    return view('Product.Product');
});

Route::post('doregister',[AdminController::class,'doregister']);

