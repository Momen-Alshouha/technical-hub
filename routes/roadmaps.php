<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Roadmap;

Route::get('roadmaps_categories', [Roadmap::class, 'roadmapsCategories'])->name('roadmapsCategories')->middleware('auth');
Route::middleware('auth')->prefix('roadmaps')->group(function () {
    Route::get('roadmapsByCategory/{categoryId}', [Roadmap::class, 'roadmapsByCategory'])->name('roadmap.roadmapsByCategory');
    Route::get('roadmapSteps/{roadmapId}', [Roadmap::class, 'roadmapSteps'])->name('roadmap.roadmapSteps');
});