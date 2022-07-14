<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [CatalogController::class, 'index'])->name('home');
Route::get('/about', [CatalogController::class, 'about'])->name('about');
Route::get('/news', [CatalogController::class, 'news'])->name('news');
Route::get('/contact', [CatalogController::class, 'contact'])->name('contact');
Route::get('/cart', [CatalogController::class, 'cart'])->name('cart');
Route::get('/adminprofile', [CatalogController::class, 'adminprofile'])->name('adminprofile');
Route::get('/catalog/{id?}', [CatalogController::class, 'catalog'])->name('catalog');
Route::get('/sortItems', [CatalogController::class, 'sortItems']);
Route::get('/item/{id}', [CatalogController::class, 'item'])->name('item');

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('delete');

    Route::get('/cart/add', [CartController::class, 'addToCart']);
    Route::get('/cart/count', [CartController::class, 'setCountCart']);

    Route::post('/cart/order', [OrderController::class, 'order'])->name('order');

    Route::get('/favorite', [CartController::class, 'cart'])->name('favorite');
    Route::get('/favorite/delete/{id}', [CartController::class, 'delete'])->name('delete');

    // Route::get('/myorder', [OrderController::class, 'index'])->name('orderIndex');
    
    // Route::get('/myorder/delete/{id}', [OrderController::class, 'deleteOrder'])->name('deleteOrder');

    // Route::middleware(['admin'])->group(function () {
    //     Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    //     Route::get('/admin/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser');

    //     Route::post('/admin/editUser/edit', [AdminController::class, 'editUserForm'])->name('editUserForm');
    // });
});