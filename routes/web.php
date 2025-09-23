<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ParticipationType;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index']);
// routes/web.php
Route::get('/register_account', [Home::class, 'register_account'])->name('register_account');
Route::get('/form/step-1', [FormController::class, 'step1'])->name('form.step1');
Route::post('/form/step-1', [FormController::class, 'postStep1']);

Route::get('/form/step-2', [FormController::class, 'step2'])->name('form.step2');
Route::post('/form/step-2', [FormController::class, 'postStep2']);

Route::get('/form/review', [FormController::class, 'review'])->name('form.review');
Route::post('/form/review', [FormController::class, 'submitFinal']);

Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');

