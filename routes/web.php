<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreSectionController;
use App\Http\Controllers\CardSectionController;
use App\Http\Controllers\InitialSectionController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProjectsSectionController;
use App\Http\Controllers\SlideSectionController;
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

//Admin Card Section
Route::get('/admin/card-section', [CardSectionController::class, 'list'])->name('admin.card-section');
Route::get('/admin/card-section/create-form', [CardSectionController::class, 'createForm'])->name('admin.card-section.create-form');
Route::post('/admin/card-section/create-save', [CardSectionController::class, 'create'])->name('admin.card-section.create-save');
Route::get('/admin/card-section/edit/{id}', [CardSectionController::class, 'edit'])->name('admin.card-section.edit');
Route::put('/admin/card-section/update/{id}', [CardSectionController::class, 'update'])->name('admin.card-section.update');
Route::delete('/admin/card-section/delete/{id}', [CardSectionController::class, 'delete'])->name('admin.card-section.delete');

//Admin Slide Section
Route::get('/admin/slide-section', [SlideSectionController::class, 'list'])->name('admin.slide-section');
Route::get('/admin/slide-section/create-form', [SlideSectionController::class, 'createForm'])->name('admin.slide-section.create-form');
Route::post('/admin/slide-section/create-save', [SlideSectionController::class, 'create'])->name('admin.slide-section.create-save');
Route::get('/admin/slide-section/edit/{id}', [SlideSectionController::class, 'edit'])->name('admin.slide-section.edit');
Route::put('/admin/slide-section/update/{id}', [SlideSectionController::class, 'update'])->name('admin.slide-section.update');
Route::delete('/admin/slide-section/delete/{id}', [SlideSectionController::class, 'delete'])->name('admin.slide-section.delete');

//Admin Projects Section
Route::get('/admin/projects-section', [ProjectsSectionController::class, 'list'])->name('admin.projects-section');
Route::get('/admin/projects-section/edit/{id}', [ProjectsSectionController::class, 'edit'])->name('admin.projects-section.edit');
Route::put('/admin/projects-section/update/{id}', [ProjectsSectionController::class, 'update'])->name('admin.projects-section.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
