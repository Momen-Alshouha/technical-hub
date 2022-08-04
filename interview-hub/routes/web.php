<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InterviewQusCatController;
use App\Http\Controllers\interviewQustionsController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('admin', function () {
    return view('admin.index');
})->name('admin');

Route::get('admin/users', function () {
    return view('admin.users');
})->name('admin/users');

// start quiz

Route::get('admin/addquiz', function () {
    return view('admin.add_quiz');
})->name('admin/add_quiz');

Route::get('admin/addqustions', function () {
    return view('admin.add_qustions');
})->name('admin/add_qustions');

// end quiz






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

Route::get('/quizzes', function () {
    return view('quizzes');
});



Route::get('/ask', function () {
    return view('ask');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::resource('user', UserController::class);

Route::resource('interview_qustions_category', interviewQusCatController::class);

Route::resource('interview_qustions', interviewQustionsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('qustion_categories',[interviewQusCatController::class,'showCategories']);

Route::get('qustion_categories/{id}',[interviewQusCatController::class,'getQustionsByCategory']);


