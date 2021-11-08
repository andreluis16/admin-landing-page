<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AreSectionController;
use App\Http\Controllers\CardSectionController;
use App\Http\Controllers\ContactSectionController;
use App\Http\Controllers\ContributorsSectionController;
use App\Http\Controllers\DrummerSectionController;
use App\Http\Controllers\HelperSectionController;
use App\Http\Controllers\HelpSectionController;
use App\Http\Controllers\InitialSectionController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NetworksSectionController;
use App\Http\Controllers\PartnersSectionController;
use App\Http\Controllers\ProjectsSectionController;
use App\Http\Controllers\SkillCardSectionController;
use App\Http\Controllers\SlideSectionController;
use App\Http\Controllers\VideoSectionController;
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

//Admin Skill Card Section
Route::get('/admin/skill-card-section', [SkillCardSectionController::class, 'list'])->name('admin.skill-card-section');
Route::get('/admin/skill-card-section/create-form', [SkillCardSectionController::class, 'createForm'])->name('admin.skill-card-section.create-form');
Route::post('/admin/skill-card-section/create-save', [SkillCardSectionController::class, 'create'])->name('admin.skill-card-section.create-save');
Route::get('/admin/skill-card-section/edit/{id}', [SkillCardSectionController::class, 'edit'])->name('admin.skill-card-section.edit');
Route::put('/admin/skill-card-section/update/{id}', [SkillCardSectionController::class, 'update'])->name('admin.skill-card-section.update');
Route::delete('/admin/skill-card-section/delete/{id}', [SkillCardSectionController::class, 'delete'])->name('admin.skill-card-section.delete');

//Admin Helper Card Section
Route::get('/admin/helper-section', [HelperSectionController::class, 'list'])->name('admin.helper-section');
Route::get('/admin/helper-section/create-form', [HelperSectionController::class, 'createForm'])->name('admin.helper-section.create-form');
Route::post('/admin/helper-section/create-save', [HelperSectionController::class, 'create'])->name('admin.helper-section.create-save');
Route::get('/admin/helper-section/edit/{id}', [HelperSectionController::class, 'edit'])->name('admin.helper-section.edit');
Route::put('/admin/helper-section/update/{id}', [HelperSectionController::class, 'update'])->name('admin.helper-section.update');
Route::delete('/admin/helper-section/delete/{id}', [HelperSectionController::class, 'delete'])->name('admin.helper-section.delete');

//Admin Contributors Section
Route::get('/admin/contributors-section', [ContributorsSectionController::class, 'list'])->name('admin.contributors-section');
Route::get('/admin/contributors-section/create-form', [ContributorsSectionController::class, 'createForm'])->name('admin.contributors-section.create-form');
Route::post('/admin/contributors-section/create-save', [ContributorsSectionController::class, 'create'])->name('admin.contributors-section.create-save');
Route::get('/admin/contributors-section/edit/{id}', [ContributorsSectionController::class, 'edit'])->name('admin.contributors-section.edit');
Route::put('/admin/contributors-section/update/{id}', [ContributorsSectionController::class, 'update'])->name('admin.contributors-section.update');
Route::delete('/admin/contributors-section/delete/{id}', [ContributorsSectionController::class, 'delete'])->name('admin.contributors-section.delete');

//Admin Networks Section
Route::get('/admin/networks-section', [NetworksSectionController::class, 'list'])->name('admin.networks-section');
Route::get('/admin/networks-section/create-form', [NetworksSectionController::class, 'createForm'])->name('admin.networks-section.create-form');
Route::post('/admin/networks-section/create-save', [NetworksSectionController::class, 'create'])->name('admin.networks-section.create-save');
Route::get('/admin/networks-section/edit/{id}', [NetworksSectionController::class, 'edit'])->name('admin.networks-section.edit');
Route::put('/admin/networks-section/update/{id}', [NetworksSectionController::class, 'update'])->name('admin.networks-section.update');
Route::delete('/admin/networks-section/delete/{id}', [NetworksSectionController::class, 'delete'])->name('admin.networks-section.delete');

//Admin Projects Section
Route::get('/admin/projects-section', [ProjectsSectionController::class, 'list'])->name('admin.projects-section');
Route::get('/admin/projects-section/edit/{id}', [ProjectsSectionController::class, 'edit'])->name('admin.projects-section.edit');
Route::put('/admin/projects-section/update/{id}', [ProjectsSectionController::class, 'update'])->name('admin.projects-section.update');

//Admin Drummer Section
Route::get('/admin/drummer-section', [DrummerSectionController::class, 'list'])->name('admin.drummer-section');
Route::get('/admin/drummer-section/edit/{id}', [DrummerSectionController::class, 'edit'])->name('admin.drummer-section.edit');
Route::put('/admin/drummer-section/update/{id}', [DrummerSectionController::class, 'update'])->name('admin.drummer-section.update');

//Admin Video Section
Route::get('/admin/video-section', [VideoSectionController::class, 'list'])->name('admin.video-section');
Route::get('/admin/video-section/edit/{id}', [VideoSectionController::class, 'edit'])->name('admin.video-section.edit');
Route::put('/admin/video-section/update/{id}', [VideoSectionController::class, 'update'])->name('admin.video-section.update');

//Admin Help Section
Route::get('/admin/help-section', [HelpSectionController::class, 'list'])->name('admin.help-section');
Route::get('/admin/help-section/edit/{id}', [HelpSectionController::class, 'edit'])->name('admin.help-section.edit');
Route::put('/admin/help-section/update/{id}', [HelpSectionController::class, 'update'])->name('admin.help-section.update');

//Admin Partiners Section
Route::get('/admin/partiners-section', [PartnersSectionController::class, 'list'])->name('admin.partiners-section');
Route::get('/admin/partiners-section/edit/{id}', [PartnersSectionController::class, 'edit'])->name('admin.partiners-section.edit');
Route::put('/admin/partiners-section/update/{id}', [PartnersSectionController::class, 'update'])->name('admin.partiners-section.update');

//Admin Contact Section
Route::get('/admin/contact-section', [ContactSectionController::class, 'list'])->name('admin.contact-section');
Route::get('/admin/contact-section/edit/{id}', [ContactSectionController::class, 'edit'])->name('admin.contact-section.edit');
Route::put('/admin/contact-section/update/{id}', [ContactSectionController::class, 'update'])->name('admin.contact-section.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
