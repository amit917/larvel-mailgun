<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailGunController;
use App\Http\Controllers\FileUploadController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;



Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/logout',[RegisterController::class,'index'])->name('logout');
Route::get('/MailGun',[MailGunController::class,'index'])->name('mailgun');
Route::get('/FileUpload',[FileUploadController::class,'index'])->name('file-upload');
Route::post('/upload-file', [FileUploadController::class, 'fileUpload'])->name('fileUpload');