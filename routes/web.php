<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JellypopShowController;
use App\Http\Controllers\BloomShowController;
use App\Http\Controllers\BubbleShowController;
use App\Http\Controllers\DuoShowController;
use App\Http\Controllers\EverydayShowController;
use App\Http\Controllers\HibiscusShowController;
use App\Http\Controllers\LoveShowController;
use App\Http\Controllers\PinkShowController;
use App\Http\Controllers\SummerShowController;
use App\Http\Controllers\WesternShowController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/jellypopshow', [JellypopShowController::class, 'jellypopshow'])->name('jellypopshow');
Route::get('/bloomshow', [BloomShowController::class, 'bloomshow'])->name('bloomshow');
Route::get('/hibiscushow', [HibiscusShowController::class, 'hibiscusshow'])->name('hibiscusshow');
Route::get('/summershow', [SummerShowController::class, 'summershow'])->name('summershow');
Route::get('/westernshow', [WesternShowController::class, 'westernshow'])->name('westernshow');
Route::get('/everydayshow', [EverydayShowController::class, 'everydayshow'])->name('everydayshow');
Route::get('/pinkshow', [PinkShowController::class, 'pinkshow'])->name('pinkshow');
Route::get('/loveshow', [LoveShowController::class, 'loveshow'])->name('loveshow');
Route::get('/duoshow', [DuoShowController::class, 'duoshow'])->name('duoshow');
Route::get('/bubbleshow', [BubbleShowController::class, 'bubbleshow'])->name('bubbleshow');

