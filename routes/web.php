<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;

Route::get('/branches', [BranchController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

