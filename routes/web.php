<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::view('/', 'accueil')->name('welcome');

Route::view('services', 'services')->name('services');

Route::view('realisations', 'realisations')->name('realisations');

Route::view('mentions-legales', 'mentions-legales')->name('mentions-legales');

Route::view('CGV', 'CGV')->name('CGV');

Route::fallback(function() {
     return view('erreur-404');
  });

//Contact
Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
