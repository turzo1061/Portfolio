<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\InfoController;

// Skill and Project submission routes
Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/works', function () {
    return view('works');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/achievements', [AchievementController::class, 'index']);

Route::get('/education', [EducationController::class, 'index']);

Route::get('/experiences', [ExperienceController::class, 'index']);

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/skills', [SkillController::class, 'index']);

Route::get('/infos', [InfoController::class, 'index']);

// Auth routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthenticationController::class, 'login']);

Route::get('/register', function () {
    return view('auth.registration');
});
Route::post('/register', [AuthenticationController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Controller::class, 'dashboard'])->name('dashboard');
});


