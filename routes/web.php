<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InterviewQusCatController;
use App\Http\Controllers\interviewQustionsController;
use App\Http\Controllers\UserQustionController;
use App\Http\Controllers\UserAnswerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Roadmap;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SiteController;
use App\Http\Middleware\isAdmin;
use Database\Seeders\interviewQuestions;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [SiteController::class, 'showHomePage'])->name('home');
Route::get('/', [SiteController::class, 'showHomePage']);

Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashborad', [AdminController::class, 'index'])->name('dashboard');
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::resource('interview_qustions_category', interviewQusCatController::class);
        Route::resource('interview_qustions', interviewQustionsController::class);
        Route::resource('courses', CourseController::class);
        Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
        Route::put('courses/{course}', [CourseController::class, 'update'])->name('course.update');
        Route::get('interview_qustions_category/{interview_qustions_category}/edit', [InterviewQusCatController::class, 'edit'])->name('interview_qustions_category.edit');
        Route::put('interview_qustions_category/{interview_qustions_category}', [InterviewQusCatController::class, 'update'])->name('interview_qustions_category.update');
        Route::get('interview_qustion/{interview_qustion}/edit', [interviewQustionsController::class, 'edit'])->name('interview_qustions.edit');
        Route::put('interview_qustion/{interview_qustion}', [interviewQustionsController::class, 'update'])->name('interview_qustions.update');
        Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
        Route::get('/reviews', [AdminController::class, 'getReviews'])->name('reviews.admin.index');
    });
});



Route::get('/about', [SiteController::class, 'showAboutPage'])->name('about');

Route::get('/contact', [SiteController::class, 'showContactPage'])->name('contact');


// Start Roadmaps
Route::get('roadmaps', [Roadmap::class, 'roadmaps'])->middleware('auth')->name('roadmaps');

Route::middleware('auth')->group(function () {
    Route::prefix('roadmaps')->group(function () {
        Route::get('frontend', [Roadmap::class, 'frontend'])->name('frontend');
        Route::get('backend', [Roadmap::class, 'backend'])->name('backend');
        Route::get('fullstack', [Roadmap::class, 'fullstack'])->name('fullstack');
        Route::get('devops', [Roadmap::class, 'devops'])->name('devops');
    });
});


// End Roadmaps

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('qustion_categories', [interviewQusCatController::class, 'showCategories'])->name('questions_categories');;
    Route::get('qustion_categories/{id}', [interviewQusCatController::class, 'getQustionsByCategory']);
    Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    Route::get('/user/profile/{id}', [UserController::class, 'show'])->name('user.profile');
});


Route::get('/404', function () {
    abort(404);
});