<?php


use App\Models\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;



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





Route::post('addcategoryPost',[CategoryController::class,'addCategoryPostfunc']);





Route::post('addProductPost',[ProductController::class,'addProductPostfunc']);
Route::get('register',[AdminController::class,'registerfunc']);

Route::get('login',[AdminController::class,'loginfunc']);
Route::get('deleteProduct/{id}',[ProductController::class,'deleteProductfunc']);
Route::get('categoryDelete/{id}',[CategoryController::class,'deleteCategoryfunc']);

Route::group(['middleware'=>'admin_auth'],function(){


    Route::get('Dashboard',[AdminController::class,'dashboardfunc']);
    Route::get('addCategory',[CategoryController::class,'addCategoryfunc']);
    Route::get('Category',[CategoryController::class,'CategoryViewfunc']);
    Route::get('showProduct',[ProductController::class,'showProductfunc']);
    Route::get('addProduct',[ProductController::class,'addProductfunc']);   
    Route::get('showCategory',[CategoryController::class,'showCategoryfunc']);
    Route::get('logout',[AdminController::class,'logout']);



});

Route::post('doregister',[AdminController::class,'doregister']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

