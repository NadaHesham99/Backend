<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;


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



Route::get('/', [MainController::class , 'index'])->name('index');





Route::middleware(['admin'])->prefix('/adminPages')->group(function ()
{
/*--------------------Product------------------*/
Route::get('/admin', [AdminController::class , 'admin'])->name('admin')->middleware('admin');

Route::post('/admin', [AdminController::class , 'addProduct'])->name('addProduct');

Route::get('/product_edit/{id}', [AdminController::class , 'product_edit'])->name('product_edit');

Route::post('/update_product/{id}', [AdminController::class , 'update_product'])->name('update_product');

Route::get('/delete_product/{id}', [AdminController::class , 'delete_product'])->name('delete_product');




/*------------------Users--------------------------*/

Route::get('/userAdmin', [UserController::class , 'admins'])->name('admins');


Route::get('/user', [UserController::class , 'user'])->name('user');

Route::post('/user', [UserController::class , 'addUser'])->name('addUser');


Route::get('/edit_user/{id}', [UserController::class , 'edit_user'])->name('edit_user');

Route::post('/update_user/{id}', [UserController::class , 'update_user'])->name('update_user');

Route::get('/delete_user/{id}', [UserController::class , 'delete_user'])->name('delete_user');


/*------------------Categories----------------*/

Route::get('/catgories', [CategoryController::class , 'catgory'])->name('catgory');

Route::post('/catgories', [CategoryController::class , 'addCatgory'])->name('addCatgory');

Route::get('/categoriesedit/{id}', [CategoryController::class , 'categoriesedit'])->name('categoriesedit');

Route::post('/update_catgory/{id}', [CategoryController::class , 'update_catgory'])->name('update_catgory');

Route::get('/delete_category/{id}', [CategoryController::class , 'delete_category'])->name('delete_category');

});


/*------------------CategoryProdcut----------------*/
Route::get('/product_categories/{id}', [CategoryController::class , 'product_categories'])->name('product_categories');


/*----------------Details=---------------------------*/

Route::get('/details/{id}', [AdminController::class , 'details'])->name('details');

/*--------------------Cart------------------------------*/
Route::middleware(['auth'])->prefix('/user')->group(function ()
{
Route::get('/add_cart/{id}', [CartController::class , 'add_cart'])->name('add_cart');

Route::get('/cart', [CartController::class , 'cart'])->name('cart');


Route::get('/delete_cart/{id}', [CartController::class , 'delete_cart'])->name('delete_cart');

Route::get('/checkout/',[CartController::class, 'checkout'])->name('checkout');

Route::post('/add_bill/',[CartController::class, 'add_bill'])->name('add_bill');

Route::get('/thankyou/',[CartController::class, 'thankyou'])->name('thankyou');

});


/*--------------------Auth------------------------------*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
