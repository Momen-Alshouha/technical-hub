<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('admin/addquiz', function () {
    return view('admin.add_quiz');
})->name('admin/add_quiz');

Route::get('admin/addqustions', function () {
    return view('admin.add_qustions');
})->name('admin/add_qustions');

Route::get('admin/qustions', function () {
    return view('admin.qustions');
})->name('admin/add_interview_qustions');

Route::get('admin/qustions', function () {
    return view('admin.qustions');
})->name('admin/add_interview_qustions_category');


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


Route::get('/qustions', function () {
    return view('qustions');
});

Route::get('/ask', function () {
    return view('ask');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::resource('user', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
