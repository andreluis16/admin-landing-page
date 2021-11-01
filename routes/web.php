<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LogoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logo', [LogoController::class, 'list'])->name('admin.logo');
Route::get('/admin/logo/edit/{id}', [LogoController::class, 'edit'])->name('admin.logo.edit');
Route::put('/admin/logo/update/{id}', [LogoController::class, 'update'])->name('admin.logo.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
