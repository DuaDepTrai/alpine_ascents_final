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
<<<<<<< HEAD
use Illuminate\Database\QueryException;


use App\Http\Controllers\UserController;

=======
use App\Http\Controllers\UserController;

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
Route::get('/admin/UserManagement', [AdminUserManagementController::class, 'index'])->name('admin.UserManagement.index');  // Hiển thị danh sách người dùng
Route::get('/admin/UserManagement/create', [AdminUserManagementController::class, 'create'])->name('admin.UserManagement.create');  // Hiển thị form thêm người dùng
Route::post('/admin/UserManagement', [AdminUserManagementController::class, 'store'])->name('admin.UserManagement.store');  // Xử lý thêm người dùng mới
Route::get('/admin/UserManagement/{id}/edit', [AdminUserManagementController::class, 'edit'])->name('admin.UserManagement.edit');  // Hiển thị form chỉnh sửa người dùng
Route::put('/admin/UserManagement/{id}', [AdminUserManagementController::class, 'update'])->name('admin.UserManagement.update');  // Xử lý cập nhật thông tin người dùng
Route::delete('/admin/UserManagement/{id}', [AdminUserManagementController::class, 'destroy'])->name('admin.UserManagement.destroy');  // Xử lý xóa người dùng

>>>>>>> d739902ce222666f56824aabffba60a613d4cc84
Route::get('/register', [UsersController::class, 'showRegistrationForm']);
Route::post('/register', [UsersController::class, 'register'])->name('register');

Route::get('verification.form', [VerificationController::class, 'showForm'])->name('verification.form');
Route::post('verify', [VerificationController::class, 'verify'])->name('verify');

Route::get('/login', [UsersController::class, 'showLoginForm']);
Route::post('/login', [UsersController::class, 'login'])->name('login');

Route::middleware(['auth', 'is_admin:0'])->group(function () {
    Route::get('/branches', [BranchController::class, 'index']);

<<<<<<< HEAD
    Route::get('/information',[InformationController::class, 'infor']);

    Route::get('/about-us', [AboutUsController::class, 'aboutUs']);

    Route::get('/home',[HomeController::class,'index'])->name('home');

    Route::get('/tours', [AdminToursController::class, 'index']);

    Route::get('/galleries', [GalleriesController::class, 'index'])->name('galleries.index');

});

Route::middleware(['auth', 'is_admin:1'])->group(function () {
    Route::get('/admin/tours', [AdminToursController::class, 'index']);

    Route::get('/admin/galleries', [AdminGalleriesController::class, 'index']);

    Route::get('/admin/Order', [AdminOrderController::class, 'index']);

    Route::get('/admin/UserManagement', [AdminUserManagementController::class, 'index']);

    Route::get('/order', [OrderController::class, 'create']);

    Route::post('/order', [OrderController::class, 'store']);

});
=======
Route::get('/order', [OrderController::class, 'create']);
Route::post('/order', [OrderController::class, 'store']);
>>>>>>> d739902ce222666f56824aabffba60a613d4cc84
