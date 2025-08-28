<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\resumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/projects',[ProjectController::class,'projects'])->name('projects');
Route::get('/resume',[resumeController::class,'resume'])->name('resume');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
