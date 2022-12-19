<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Authorization\RegisterController;
use App\Http\Controllers\Authorization\LoginController;
use App\Http\Controllers\Adm\AdminController;
use App\Http\Controllers\Adm\UserController;
use App\Http\Controllers\Adm\ProductController as AdmProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Adm\CategoryController;
use App\Http\Controllers\Adm\CouponController;
use App\Http\Controllers\Adm\OfferController;

Route::get('/', [IndexController::class, 'index'])->name('index');


Route::prefix('adm')->as('adm.')->middleware('hasrole:admin,moderator')->group(function (){

   Route::get('/',[AdminController::class, 'index'])->name('index');


   Route::get('/coupons', [CouponController::class, 'index'])->name('coupon.index');
   Route::get('/coupons/create', [CouponController::class, 'create'])->name('coupon.create');
   Route::post('/coupons', [CouponController::class, 'store'])->name('coupon.store');
   Route::delete('/coupons/{coupon}', [CouponController::class, 'destroy'])->name('coupon.delete');

   Route::get('/offer', [OfferController::class, 'index'])->name('offer.index');
   Route::get('/offer/add', [OfferController::class, 'create'])->name('offer.create');
   Route::post('/offer/store', [OfferController::class, 'update'])->name('offer.store');
   Route::delete('/offer/{offer}', [OfferController::class, 'destroy'])->name('offer.delete');

   //

   Route::get('/users', [UserController::class, 'index'])->name('users.index');
   Route::get('/users/{user}edit', [UserController::class, 'edit'])->name('users.edit');
   Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
   Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.delete');

   Route::get('/roles', [UserController::class, 'roles'])->name('roles.index');


   Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
   Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
   Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
   Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
   Route::put('/categories/update', [CategoryController::class, 'update'])->name('category.update');
   Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.delete');

   //

   Route::get('/products', [AdmProductController::class, 'index'])->name('products.index');
   Route::get('/products/create', [AdmProductController::class, 'create'])->name('products.create');
   Route::post('/products/store', [AdmProductController::class, 'store'])->name('products.store');
   Route::get('/products/{product}/edit', [AdmProductController::class, 'edit'])->name('products.edit');
   Route::put('/products/{product}', [AdmProductController::class, 'update'])->name('products.update');
   Route::delete('/products/{product}', [AdmProductController::class, 'destroy'])->name('products.delete');

});

Route::get('/categories/{category}', [ProductController::class, 'indexCategory'])->name('category.index');


Route::middleware('auth')->group(function (){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/product/{product}/like', [ProductController::class, 'productsLiked'])->name('products.like');
    Route::get('/wishlist', [ProductController::class, 'wishlist'])->name('wishlist');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{product}/store', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{cart}/delete', [CartController::class, 'destroy'])->name('cart.delete');
    Route::put('/cart/update', [CartController::class, 'update'])->name('cart.update');

    Route::get('/print', [IndexController::class, 'print'])->name('print.clothes');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'create'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

//Auth::routes();

Route::get('/contacts', [IndexController::class, 'contacts'])->name('contacts');

Route::resource('/products', ProductController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
