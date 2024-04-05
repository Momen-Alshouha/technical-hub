<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InterviewQusCatController;
use App\Http\Controllers\InterviewQustionsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Roadmap;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoadmapsCategoryController;
use App\Http\Controllers\SiteController;

Route::get('/home', [SiteController::class, 'showHomePage'])->name('home');
Route::get('/', [SiteController::class, 'showHomePage']);
Route::get('/about', [SiteController::class, 'showAboutPage'])->name('about');
Route::get('/contact', [SiteController::class, 'showContactPage'])->name('contact');

Auth::routes();

Route::middleware('auth')->group(function () {
    // User Profile
    Route::get('/user/profile/{id}', [UserController::class, 'show'])->name('user.profile');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

    // Reviews
    Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});

// Admin Routes
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

// Roadmap Routes
Route::get('roadmaps', [Roadmap::class, 'roadmaps'])->name('roadmaps')->middleware('auth');
Route::middleware('auth')->prefix('roadmaps')->group(function () {
    Route::get('frontend', [Roadmap::class, 'frontend'])->name('frontend');
    Route::get('backend', [Roadmap::class, 'backend'])->name('backend');
    Route::get('fullstack', [Roadmap::class, 'fullstack'])->name('fullstack');
    Route::get('devops', [Roadmap::class, 'devops'])->name('devops');
});

// Interview Questions Routes
Route::middleware('auth')->group(function () {
    Route::get('qustion_categories', [InterviewQusCatController::class, 'showCategories'])->name('questions_categories');
    Route::get('qustion_categories/{id}', [InterviewQusCatController::class, 'getQustionsByCategory']);
});
