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
Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/checkoutshow', [CheckoutShowController::class, 'checkoutshow'])->name('checkoutshow');
Route::get('/jellypopshow', [JellypopShowController::class, 'jellypopshow'])->name('jellypopshow');
Route::get('/bloomshow', [BloomShowController::class, 'bloomshow'])->name('bloomshow');
Route::get('/hibiscushow', [HibiscusShowController::class, 'hibiscusshow'])->name('hibiscusshow');
Route::get('/summershow', [SummerShowController::class, 'summershow'])->name('summershow');
Route::get('/westernshow', [WesternShowController::class, 'westernshow'])->name('westernshow');
Route::get('/everydayshow', [EverydayShowController::class, 'everydayshow'])->name('everydayshow');
Route::get('/pinkshow', [PinkShowController::class, 'pinkshow'])->name('pinkshow');
Route::get('/loveshow', [LoveShowController::class, 'loveshow'])->name('loveshow');
Route::get('/duoshow', [DuoShowController::class, 'duoshow'])->name('duoshow');
Route::get('/marbleshow', [MarbleShowController::class, 'marbleshow'])->name('marbleshow');
Route::get('/bowshow', [BowShowController::class, 'bowshow'])->name('bowshow');
Route::get('/flashyshow', [FlashyShowController::class, 'flashyshow'])->name('flashyshow');
Route::get('/friendshow', [FriendShowController::class, 'friendshow'])->name('friendshow');
Route::get('/springshow', [SpringShowController::class, 'springshow'])->name('springshow');
Route::get('/bloodshow', [BloodShowController::class, 'bloodshow'])->name('bloodshow');
Route::get('/bearshow', [BearShowController::class, 'bearshow'])->name('bearshow');
Route::get('/product/{product}', [LandingPageController::class, 'show'])->name('product.show');

