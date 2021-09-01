<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BloodRequestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
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

Route::post('/contactUs', [ContactController::class, 'store'])->name('contactUs');

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

Route::get('/all-donations', [DonationController::class, 'index'])->name('all-donations');
Route::get('/createDonation', [DonationController::class, 'create'])->name('createDonation');
Route::post('/storeDonation', [DonationController::class, 'store'])->name('storeDonation');
Route::get('/editDonation/{id}', [DonationController::class, 'edit'])->name('editDonation');
Route::get('/deleteDonation/{id}', [DonationController::class, 'destroy'])->name('deleteDonation');
Route::post('/updateDonation/{id}', [DonationController::class, 'update'])->name('updateDonation');


Route::get('/message-contact', [ContactController::class, 'create'])->name('message-contact');
Route::get('/deleteMessage/{id}', [ContactController::class, 'destroy'])->name('deleteMessage');

Route::get('/all-requests', [BloodRequestController::class, 'index'])->name('all-requests');
Route::post('/blood-request', [BloodRequestController::class, 'store'])->name('blood-request');
Route::get('/deleteBloodRequest/{id}', [BloodRequestController::class, 'destroy'])->name('deleteBloodRequest');




Route::get('/home', [HomeController::class, 'index'])->name('home');

