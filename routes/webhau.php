<?php

use App\Http\Controllers\AdminGalleriesController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminToursController;
use App\Http\Controllers\AdminUserManagementController;
use App\Http\Controllers\AdminBranchesController;
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


Route::prefix('admin')->group(function () {
    Route::resource('tours', AdminToursController::class);
});



Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/branches', [BranchController::class, 'index']);

Route::get('/information',[InformationController::class, 'infor']);

Route::get('/about-us', [AboutUsController::class, 'aboutUs']);

Route::get('/tours', [ToursController::class, 'index']);

Route::get('/admin/tours', [AdminToursController::class, 'index']);

Route::get('/admin/galleries', [AdminGalleriesController::class, 'index'])->name('admin.galleries.index');
Route::get('/admin/galleries/create', [AdminGalleriesController::class, 'create'])->name('admin.galleries.create');
Route::post('/admin/galleries', [AdminGalleriesController::class, 'store'])->name('admin.galleries.store');
Route::get('admin/galleries/{id}/edit', [AdminGalleriesController::class, 'edit'])->name('admin.galleries.edit');
Route::post('admin/galleries/{id}/delete-image', [AdminGalleriesController::class, 'deleteImage'])->name('admin.galleries.deleteImage');
Route::put('admin/galleries/{id}', [AdminGalleriesController::class, 'update'])->name('admin.galleries.update');
Route::delete('admin/galleries/{id}', [AdminGalleriesController::class, 'destroy'])->name('admin.galleries.destroy');



Route::get('/admin/order', [AdminOrderController::class, 'index'])->name('admin.order.index');
Route::get('/admin/order/{id}/edit', [AdminOrderController::class, 'edit'])->name('admin.order.edit');
Route::put('/admin/order/{id}', [AdminOrderController::class, 'update'])->name('admin.order.update');
Route::delete('/admin/order/{id}', [AdminOrderController::class, 'destroy'])->name('admin.order.destroy');



Route::get('/admin/UserManagement', [AdminUserManagementController::class, 'index']);
Route::get('/admin/UserManagement', [AdminUserManagementController::class, 'index'])->name('admin.UserManagement.index');  // Display user list
Route::get('/admin/UserManagement/create', [AdminUserManagementController::class, 'create'])->name('admin.UserManagement.create');  // Show user addition form
Route::post('/admin/UserManagement', [AdminUserManagementController::class, 'store'])->name('admin.UserManagement.store');  // Handle new user addition
Route::get('/admin/UserManagement/{id}/edit', [AdminUserManagementController::class, 'edit'])->name('admin.UserManagement.edit');  // Show user edit form
Route::put('/admin/UserManagement/{id}', [AdminUserManagementController::class, 'update'])->name('admin.UserManagement.update');  // Handle user information update
Route::delete('/admin/UserManagement/{id}', [AdminUserManagementController::class, 'destroy'])->name('admin.UserManagement.destroy');  // Handle user deletion



Route::get('/admin/branches', [AdminBranchesController::class, 'index']);
Route::get('/admin/branches', [AdminBranchesController::class, 'index'])->name('admin.branches.index');  // Show list branches
Route::get('/admin/branches/create', [AdminBranchesController::class, 'create'])->name('admin.branches.create');  // Form add new branch
Route::post('/admin/branches', [AdminBranchesController::class, 'store'])->name('admin.branches.store');  // Process new branch
Route::get('/admin/branches/{id}/edit', [AdminBranchesController::class, 'edit'])->name('admin.branches.edit');  // Form edit branch
Route::put('/admin/branches/{id}', [AdminBranchesController::class, 'update'])->name('admin.branches.update');  // Process edit branch
Route::delete('/admin/branches/{id}', [AdminBranchesController::class, 'destroy'])->name('admin.branches.destroy');  // Process delete branch


Route::get('/register', [UsersController::class, 'showRegistrationForm']);
Route::post('/register', [UsersController::class, 'register'])->name('register');

Route::get('verification.form', [VerificationController::class, 'showForm'])->name('verification.form');
Route::post('verify', [VerificationController::class, 'verify'])->name('verify');

Route::get('/login', [UsersController::class, 'showLoginForm']);
Route::post('/login', [UsersController::class, 'login'])->name('login');

Route::get('/galleries', [GalleriesController::class, 'index'])->name('galleries.index');

Route::get('/order', [OrderController::class, 'create'])->name('order.create');
Route::post('/order/confirm', [OrderController::class, 'confirm'])->name('order.confirm');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/success', [OrderController::class, 'success'])->name('order.success');




