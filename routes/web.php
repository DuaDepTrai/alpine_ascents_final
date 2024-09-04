<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VerificationController;

Route::get('/branches', [BranchController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');


Route::get('/about-us', [AboutUsController::class, 'aboutUs']);
Route::get('/blogs-1', [AboutUsController::class, 'blogs1']);

Route::get('/register', [UsersController::class, 'showRegistrationForm']);
Route::post('/register', [UsersController::class, 'register'])->name('register');

Route::get('verification.form', [VerificationController::class, 'showForm'])->name('verification.form');
Route::post('verify', [VerificationController::class, 'verify'])->name('verify');

Route::get('/login', [UsersController::class, 'showLoginForm']);
Route::post('/login', [UsersController::class, 'login'])->name('login');