<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Roadmap;

Route::get('roadmaps_categories', [Roadmap::class, 'roadmapsCategories'])->name('roadmapsCategories')->middleware('auth');
Route::middleware('auth')->prefix('roadmaps')->group(function () {
    Route::get('frontend', [Roadmap::class, 'frontend'])->name('frontend');
    Route::get('backend', [Roadmap::class, 'backend'])->name('backend');
    Route::get('fullstack', [Roadmap::class, 'fullstack'])->name('fullstack');
    Route::get('devops', [Roadmap::class, 'devops'])->name('devops');
});