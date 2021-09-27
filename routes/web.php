<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

//mostrar Anuncio por Categoria
Route::get('/category/{name}/{id}/ads', [PublicController::class,'adsByCategory'])->name('category.ads');

//Recuperar imagen tras error de validación
Route::get('/ad/images', [AdController::class,'getImages'])->name('ad.images');

//mostrar anuncio
Route::get('/ad/{id}', [AdController::class,'details'])->name("ad.details");

//Rutas para el revisor
Route::get('/revisor',[RevisorController::class,'index'] )->name('revisor.home');

//Rutas para aceptar o rechazar
Route::post('/revisor/ad/{id}/accept',[RevisorController::class,'accept'])->name('revisor.ad.accept');
Route::post('/revisor/ad/{id}/reject',[RevisorController::class,'reject'])->name('revisor.ad.reject');

//Rutas para los idiomas
Route::post('/locale/{locale}', [PublicController::class,'locale'])->name('locale');

//Ruta para subir imagen a ad
Route::post('/ad/images/upload', [AdController::class,'uploadImages'])->name('ad.images.upload');

//Para eliminar imágenes
Route::delete('/ad/images/remove', [AdController::class,'removeImages'])->name('ad.images.remove');

//Ruta para búsquedas
Route::get('/search', [PublicController::class,'search'])->name('search');