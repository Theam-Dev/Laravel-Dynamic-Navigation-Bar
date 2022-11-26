<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\FrontController;
  
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
Route::get('', [FrontController::class, 'home'])->name('home');
Route::get('contact-us', [FrontController::class, 'contactUs'])->name('contact.index');
Route::get('about-us', [FrontController::class, 'aboutUs'])->name('about.us');