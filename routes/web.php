<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProductController;

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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('menu', [HomeController::class, 'menu'])->name('menu');

Route::middleware('auth')->group(function () {
    Route::get('home',[HomeController::class,'menu'])->name('home');
    Route::get('home/cartlist',[CartController::class,'show'])->name('cartlist');
    Route::post('checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('order', [CartController::class, 'order'])->name('order');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/avatar',[ImageUploadController::class, 'avatarUpdate'])->name('profile.avatar');

    
});

Route::middleware(['auth', 'cahshier'])->prefix('cahsier')->group(function(){

});

Route::middleware(['auth', 'admin'])->prefix('home')->group(function () {
    Route::get('create', [ProductController::class,'create'])->name('products.create');
    Route::post('store', [ProductController::class,'store'])->name('products.store');
    Route::get('edit/{id}', [ProductController::class,'edit'])->name('products.edit');
    Route::put('edit/{id}', [ProductController::class,'update'])->name('products.update');
    Route::delete('destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy');
    Route::post('store/image',[ImageUploadController::class, 'foodImage'])->name('product.image');
    Route::patch('edit/food/{id}', [ImageUploadController::class, 'foodImage'])->name('food.image');
});

require __DIR__.'/auth.php';
