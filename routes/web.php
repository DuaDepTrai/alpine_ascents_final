<?php

use App\Http\Controllers\AdminGalleriesController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminToursController;
use App\Http\Controllers\AdminUserManagementController;
use App\Http\Controllers\ToursController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\UserController;

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/branches', [BranchController::class, 'index']);

Route::get('/information',[InformationController::class, 'infor']);

Route::get('/about-us', [AboutUsController::class, 'aboutUs']);

Route::get('/tours', [ToursController::class, 'index']);

Route::get('/admin/tours', [AdminToursController::class, 'index']);

Route::get('/admin/galleries', [AdminGalleriesController::class, 'index']);

Route::get('/admin/order', [AdminOrderController::class, 'index'])->name('admin.order.index');
Route::get('/admin/order/{id}/edit', [AdminOrderController::class, 'edit'])->name('admin.order.edit');
Route::put('/admin/order/{id}', [AdminOrderController::class, 'update'])->name('admin.order.update');
Route::delete('/admin/order/{id}', [AdminOrderController::class, 'destroy'])->name('admin.order.destroy');



Route::get('/admin/UserManagement', [AdminUserManagementController::class, 'index']);

Route::get('/register', [UsersController::class, 'showRegistrationForm']);
Route::post('/register', [UsersController::class, 'register'])->name('register');

Route::get('verification.form', [VerificationController::class, 'showForm'])->name('verification.form');
Route::post('verify', [VerificationController::class, 'verify'])->name('verify');

Route::get('/login', [UsersController::class, 'showLoginForm']);
Route::post('/login', [UsersController::class, 'login'])->name('login');

Route::get('/galleries', [GalleriesController::class, 'index'])->name('galleries.index');



Route::get('/order', [OrderController::class, 'create']);
Route::post('/order', [OrderController::class, 'store']);
