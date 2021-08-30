<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;








 

Route::get('/', [MainController::class, 'index'])->name('homepage');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/donor', [DonorController::class, 'index'])->name('donor');
Route::get('/manage-blood', [ManageController::class, 'index'])->name('manage-blood');

Auth::routes();

/* Routes for admin panel  */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/all-donors', [DonorController::class, 'donors'])->name('all-donors');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

