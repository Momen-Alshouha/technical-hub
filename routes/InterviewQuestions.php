<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterviewQusCatController;

// Interview Questions Routes
Route::middleware('auth')->group(function () {
    Route::get('qustion_categories', [InterviewQusCatController::class, 'showCategories'])->name('questions_categories');
    Route::get('qustion_categories/{id}', [InterviewQusCatController::class, 'getQustionsByCategory']);
});
