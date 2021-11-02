<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InitialSectionController;
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

Route::get('/admin/initial-section', [InitialSectionController::class, 'list'])->name('admin.initial-section');
Route::get('/admin/initial-section/edit/{id}', [InitialSectionController::class, 'edit'])->name('admin.initial-section.edit');
Route::put('/admin/initial-section/update/{id}', [InitialSectionController::class, 'update'])->name('admin.initial-section.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
