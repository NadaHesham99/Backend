<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
})->name('index');


/*--------------------Product------------------*/
Route::get('/adminPages/admin', [AdminController::class , 'admin'])->name('admin');

Route::post('/adminPages/admin', [AdminController::class , 'addProduct'])->name('addProduct');

Route::get('/adminPages/product_edit/{id}', [AdminController::class , 'product_edit'])->name('product_edit');

Route::post('/adminPages/update_product/{id}', [AdminController::class , 'update_product'])->name('update_product');

Route::get('/adminPages/delete_product/{id}', [AdminController::class , 'delete_product'])->name('delete_product');




/*------------------Users--------------------------*/

Route::get('/adminPages/userAdmin', [UserController::class , 'admins'])->name('admins');


Route::get('/adminPages/user', [UserController::class , 'user'])->name('user');

Route::post('/adminPages/user', [UserController::class , 'addUser'])->name('addUser');


Route::get('/adminPages/edit_user/{id}', [UserController::class , 'edit_user'])->name('edit_user');

Route::post('/adminPages/update_user/{id}', [UserController::class , 'update_user'])->name('update_user');

Route::get('/adminPages/delete_user/{id}', [UserController::class , 'delete_user'])->name('delete_user');


/*------------------Categories----------------*/

Route::get('/adminPages/catgories', [CategoryController::class , 'catgory'])->name('catgory');

Route::post('/adminPages/catgories', [CategoryController::class , 'addCatgory'])->name('addCatgory');

Route::get('/adminPages/categoriesedit/{id}', [CategoryController::class , 'categoriesedit'])->name('categoriesedit');

Route::post('/adminPages/update_catgory/{id}', [CategoryController::class , 'update_catgory'])->name('update_catgory');

Route::get('/adminPages/delete_category/{id}', [CategoryController::class , 'delete_category'])->name('delete_category');



/*------------------Clothes----------------*/
Route::get('/clothes', [AdminController::class , 'clothes'])->name('clothes');

/*------------------Accessories----------------*/
Route::get('/accessories', [AdminController::class , 'accessories'])->name('accessories');

/*------------------wooden-toys----------------*/
Route::get('/wooden_toys', [AdminController::class , 'wooden_toys'])->name('wooden_toys');

/*------------------furniture----------------*/
Route::get('/furniture', [AdminController::class , 'furniture'])->name('furniture');

/*------------------carpets----------------*/
Route::get('/carpets', [AdminController::class , 'carpets'])->name('carpets');

/*------------------paintings----------------*/
Route::get('/paintings', [AdminController::class , 'paintings'])->name('paintings');

Route::get('/details/{id}', [AdminController::class , 'details'])->name('details');