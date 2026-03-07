<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompetencesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CvController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/competences', [CompetencesController::class, 'competences'])->name('competences');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/realisation', [RealisationController::class, 'realisation'])->name('realisation');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/vitae', [CvController::class, 'index'])->name('vitae');