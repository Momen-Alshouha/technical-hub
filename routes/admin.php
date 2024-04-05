<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InterviewQusCatController;
use App\Http\Controllers\InterviewQustionsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoadmapsCategoryController;


Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::resource('interview_qustions_category', InterviewQusCatController::class);
        Route::resource('interview_qustions', InterviewQustionsController::class);
        Route::resource('courses', CourseController::class);
        Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
        Route::put('courses/{course}', [CourseController::class, 'update'])->name('course.update');
        Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
        Route::get('/reviews', [AdminController::class, 'getReviews'])->name('reviews.admin.index');
        Route::get('/roadmaps/categories', [RoadmapsCategoryController::class, 'index'])->name('roadmaps.categories.index');
        Route::get('/roadmap/category/create', [RoadmapsCategoryController::class, 'create'])->name('roadmaps.category.create');
        Route::delete('/roadmap/category/{id}', [RoadmapsCategoryController::class, 'destroy'])->name('roadmap_category.destroy');
        Route::post('/roadmap/category/store', [RoadmapsCategoryController::class, 'store'])->name('roadmap.category.store');
        Route::get('/roadmap/category/{id}/edit', [RoadmapsCategoryController::class, 'edit'])->name('roadmap.category.edit');
        Route::put('/roadmap/category/{id}', [RoadmapsCategoryController::class, 'update'])->name('roadmap.category.update');
    });
});
