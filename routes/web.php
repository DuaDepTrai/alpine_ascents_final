<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutUsController;

Route::get('/branches', [BranchController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');


Route::get('/about-us', [AboutUsController::class, 'aboutUs']);
Route::get('/blogs-1', [AboutUsController::class, 'blogs1']);
