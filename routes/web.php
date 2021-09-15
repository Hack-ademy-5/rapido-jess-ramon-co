<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;

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

//Home
Route::get('/', [PublicController::class,'index'])->name('home');

//C de Ad
Route::get('/ad/new', [AdController::class,'newAd'])->name('ad.new');
Route::post('/ad/create', [AdController::class,'createAd'])->name('ad.create');
