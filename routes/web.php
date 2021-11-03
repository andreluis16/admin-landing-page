<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreSectionController;
use App\Http\Controllers\InitialSectionController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LogoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Admin Dashboard
Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

//Admin Logo
Route::get('/admin/logo', [LogoController::class, 'list'])->name('admin.logo');
Route::get('/admin/logo/edit/{id}', [LogoController::class, 'edit'])->name('admin.logo.edit');
Route::put('/admin/logo/update/{id}', [LogoController::class, 'update'])->name('admin.logo.update');

//Admin Initial Section
Route::get('/admin/initial-section', [InitialSectionController::class, 'list'])->name('admin.initial-section');
Route::get('/admin/initial-section/edit/{id}', [InitialSectionController::class, 'edit'])->name('admin.initial-section.edit');
Route::put('/admin/initial-section/update/{id}', [InitialSectionController::class, 'update'])->name('admin.initial-section.update');

//Admin Are Section
Route::get('/admin/are-section', [AreSectionController::class, 'list'])->name('admin.are-section');
Route::get('/admin/are-section/edit/{id}', [AreSectionController::class, 'edit'])->name('admin.are-section.edit');
Route::put('/admin/are-section/update/{id}', [AreSectionController::class, 'update'])->name('admin.are-section.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
