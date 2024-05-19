<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BearShowController;
use App\Http\Controllers\BloodShowController;
use App\Http\Controllers\BloomShowController;
use App\Http\Controllers\BowShowController;
use App\Http\Controllers\DuoShowController;
use App\Http\Controllers\EverydayShowController;
use App\Http\Controllers\FlashyShowController;
use App\Http\Controllers\FriendShowController;
use App\Http\Controllers\HibiscusShowController;
use App\Http\Controllers\JellypopShowController;
use App\Http\Controllers\LoveShowController;
use App\Http\Controllers\MarbleShowController;
use App\Http\Controllers\PinkShowController;
use App\Http\Controllers\SpringShowController;
use App\Http\Controllers\SummerShowController;
use App\Http\Controllers\WesternShowController;
use App\Http\Controllers\CheckoutShowController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\WelcomeController;


use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/checkoutshow', [CheckoutShowController::class, 'checkoutshow'])->name('checkoutshow');
Route::get('/product/{product}', [LandingPageController::class, 'show'])->name('product.show');
Route::post('/product/add-to-cart', [LandingPageController::class, 'addToCart'])->name('product.add-to-cart');
Route::get('/cart', [LandingPageController::class, 'showCart'])->name('cart.show');
Route::post('/checkout', [LandingPageController::class, 'checkout'])->name('checkout');