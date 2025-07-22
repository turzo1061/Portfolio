<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

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

Route::get('/achievements', function () {
    return view('achievements');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/experiences', function () {
    return view('experiences');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/infos', function () {
    return view('infos.blae');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

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