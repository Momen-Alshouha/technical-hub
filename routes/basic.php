<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/home', [SiteController::class, 'showHomePage'])->name('home');
Route::get('/', [SiteController::class, 'showHomePage']);
Route::get('/about', [SiteController::class, 'showAboutPage'])->name('about');
Route::get('/contact', [SiteController::class, 'showContactPage'])->name('contact');
