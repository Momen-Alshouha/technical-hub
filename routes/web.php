<?php

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
use App\Http\Middleware\isAdmin;

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

// Route::get('admin', function () {
//     return view('admin.index');
// })->name('admin');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['admin'])->group(function () {
    Route::get('admin', function () {
        return view('admin.index');
    })->name('admin');
    Route::get('user', [UserController::class, 'index'])->name('users');
    Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});

Route::get('/userprofile', function () {
    return view('user_profile');
});

Route::get('/userprofile', function () {
    return view('user_profile')->name('userprofile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


// Start Roadmaps

Route::get('roadmaps',[Roadmap::class,'roadmaps'])->name('roadmaps');

Route::get('frontend',[Roadmap::class,'frontend'])->name('frontend');
Route::get('backend',[Roadmap::class,'backend'])->name('backend');
Route::get('fullstack',[Roadmap::class,'fullstack'])->name('fullstack');
Route::get('devops',[Roadmap::class,'devops'])->name('devops');

// End Roadmaps


//Route::resource('user', UserController::class);

Route::resource('interview_qustions_category', interviewQusCatController::class);

Route::resource('interview_qustions', interviewQustionsController::class);

Route::resource('courses', CourseController::class);

Route::resource('reviews',ReviewController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('qustion_categories',[interviewQusCatController::class,'showCategories']);

Route::get('qustion_categories/{id}',[interviewQusCatController::class,'getQustionsByCategory']);



