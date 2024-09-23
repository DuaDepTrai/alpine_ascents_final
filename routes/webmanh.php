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
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Database\QueryException;

Route::prefix('admin')->group(function () {
    Route::resource('tours', AdminToursController::class);
});


Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/branches', [BranchController::class, 'index'])->name('branches');

Route::get('/information',[InformationController::class, 'infor'])->name('information');

Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('aboutus');

Route::get('/tours', [ToursController::class, 'index'])->name('tours');
Route::get('/admin/tours', [AdminToursController::class, 'index'])->name('admin.tours.index');
Route::get('/admin/tours/create', [AdminToursController::class, 'create'])->name('admin.tours.create');
Route::post('/admin/tours', [AdminToursController::class, 'store'])->name('admin.tours.store');
Route::get('admin/tours/{id}/edit', [AdminToursController::class, 'edit'])->name('admin.tours.edit');
Route::put('admin/tours/{id}', [AdminToursController::class, 'update'])->name('admin.tours.update');
Route::delete('admin/tours/{id}', [AdminToursController::class, 'destroy'])->name('admin.tours.destroy');


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


Route::get('/admin/UserManagement', [AdminUserManagementController::class, 'index'])->name('admin.UserManagement.index');  // Hiển thị danh sách người dùng
Route::get('/admin/UserManagement/create', [AdminUserManagementController::class, 'create'])->name('admin.UserManagement.create');  // Hiển thị form thêm người dùng
Route::post('/admin/UserManagement', [AdminUserManagementController::class, 'store'])->name('admin.UserManagement.store');  // Xử lý thêm người dùng mới
Route::get('/admin/UserManagement/{id}/edit', [AdminUserManagementController::class, 'edit'])->name('admin.UserManagement.edit');  // Hiển thị form chỉnh sửa người dùng
Route::put('/admin/UserManagement/{id}', [AdminUserManagementController::class, 'update'])->name('admin.UserManagement.update');  // Xử lý cập nhật thông tin người dùng
Route::delete('/admin/UserManagement/{id}', [AdminUserManagementController::class, 'destroy'])->name('admin.UserManagement.destroy');  // Xử lý xóa người dùng

//
Route::get('/register', [UsersController::class, 'showRegistrationForm']);
Route::post('/register', [UsersController::class, 'register'])->name('register');
Route::get('/register.verify',[VerificationController::class,'showRegisterVerifyForm'])->name('register.verify.form');
Route::post('/register.verify',[VerificationController::class,'registerVerify'])->name('register.verify');

Route::get('/forgetpass',[UsersController::class,'showForgetPassForm'])->name('forgetpass.form');
Route::get('/verification.form', [VerificationController::class, 'showForm'])->name('verification.form');
Route::get('/verificationchange.form', [VerificationController::class, 'showChangeForm'])->name('verificationchange.form');

Route::post('/send.mail',[MailController::class,'sendMail'])->name('send.mail');
Route::post('/verify', [VerificationController::class, 've  rify'])->name('verify');
Route::post('/changeverify',[VerificationController::class,'changeVerify'])->name('change.verify');
Route::put('/updatepass',[VerificationController::class,'updatePassword'])->name('update.password');
Route::put('/updateforgetpass',[VerificationController::class,'updateForgetPassword'])->name('update.forget.password');

Route::get('/login', [UsersController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');

Route::get('/users/changepass',[UsersController::class,'showChangePassForm'])->name('changepass.form');
Route::get('/users/forgetpass',[UsersController::class,'showForgetPassForm'])->name('forgetpass.form');
Route::get('/users/newpassword',[UsersController::class,'showNewPassForm'])->name('newpass.form');
Route::get('/users/{user}',[UsersController::class,'index'])->name('users.index');
Route::get('/users/{user}/edit',[UsersController::class,'edit'])->name('users.edit');
Route::put('/users/{user}',[UsersController::class,'update'])->name('users.update');

Route::get('/personalinfo', [UsersController::class, 'personalInfo'])->name('users.personalinfo');
Route::get('/settings', [UsersController::class, 'settings'])->name('users.settings');

//
Route::get('/galleries', [GalleriesController::class, 'index'])->name('galleries.index');

Route::get('/order', [OrderController::class, 'create']);
Route::post('/order', [OrderController::class, 'store']);


// Route::middleware(['auth', 'is_admin:0'])->group(function () {
//     Route::get('/branches', [BranchController::class, 'index']);

//     Route::get('/information',[InformationController::class, 'infor']);

//     Route::get('/about-us', [AboutUsController::class, 'aboutUs']);

//     Route::get('/home',[HomeController::class,'index'])->name('home');

//     Route::get('/tours', [AdminToursController::class, 'index']);

//     Route::get('/galleries', [GalleriesController::class, 'index'])->name('galleries.index');

// });

// Route::middleware(['auth', 'is_admin:1'])->group(function () {
//     Route::get('/admin/tours', [AdminToursController::class, 'index']);

//     Route::get('/admin/galleries', [AdminGalleriesController::class, 'index']);

//     Route::get('/admin/Order', [AdminOrderController::class, 'index']);

//     Route::get('/admin/UserManagement', [AdminUserManagementController::class, 'index']);

//     Route::get('/order', [OrderController::class, 'create']);

//     Route::post('/order', [OrderController::class, 'store']);

// });