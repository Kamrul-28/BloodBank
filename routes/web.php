<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\SchoolController;
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
Route::get('/createDonor', [DonorController::class, 'create'])->name('createDonor');
Route::post('/storeDonor', [DonorController::class, 'store'])->name('storeDonor');
Route::get('/editDonor/{id}', [DonorController::class, 'edit'])->name('editDonor');
Route::get('/deleteDonor/{id}', [DonorController::class, 'destroy'])->name('deleteDonor');
Route::post('/updateDonor/{id}', [DonorController::class, 'update'])->name('updateDonor');

Route::get('/all-schools', [SchoolController::class, 'index'])->name('all-schools');
Route::get('/createSchool', [SchoolController::class, 'create'])->name('createSchool');
Route::post('/storeSchool', [SchoolController::class, 'store'])->name('storeSchool');
Route::get('/editSchool/{id}', [SchoolController::class, 'edit'])->name('editSchool');
Route::get('/deleteSchool/{id}', [SchoolController::class, 'destroy'])->name('deleteSchool');
Route::post('/updateSchool/{id}', [SchoolController::class, 'update'])->name('updateSchool');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

