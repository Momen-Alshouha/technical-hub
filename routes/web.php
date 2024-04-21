<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;

include('admin.php');
include('basic.php');
include('InterviewQuestions.php');
include('roadmaps.php');

Auth::routes();

Route::middleware('auth')->group(function () {
    // User Profile
    Route::get('/user/profile/{id}', [UserController::class, 'show'])->name('user.profile');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

    // Reviews
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});



