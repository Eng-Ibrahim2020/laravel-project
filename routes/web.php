<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FirstControoler;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site3Controller;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix('site1')->name('site1.')->group(function () {
    Route::get('home', [Site1Controller::class, 'index'])->name('index');
    Route::get('about', [Site1Controller::class, 'about'])->name('about');
    Route::get('post', [Site1Controller::class, 'post'])->name('post');
    Route::get('contact', [Site1Controller::class, 'contact'])->name('contact');
});

Route::view('site2', 'website2.index')->name('index2');


Route::prefix('site3')->name('site3.')->group(function () {
    Route::get('home', [Site3Controller::class, 'index'])->name('index');
    Route::get('feature', [Site3Controller::class, 'feature'])->name('feature');
    Route::get('download', [Site3Controller::class, 'download'])->name('download');
    Route::get('contact', [Site3Controller::class, 'contact'])->name('contact');
    Route::get('contact-data', [Site3Controller::class, 'contact_data'])->name('contact-data');
});

Route::prefix('form')->name('form.')->group(function () {
    Route::get('form1', [FormsController::class, 'form1'])->name('form1');
    Route::post('form1', [FormsController::class, 'form1_data'])->name('form1_data');
    Route::get('form2', [FormsController::class, 'form2'])->name('form2');
    Route::post('form2', [FormsController::class, 'form2_data'])->name('form2_data');
    Route::get('form3', [FormsController::class, 'form3'])->name('form3');
    Route::post('form3', [FormsController::class, 'form3_data'])->name('form3_data');
    Route::get('form4', [FormsController::class, 'form4'])->name('form4');
    Route::post('form4', [FormsController::class, 'form4_data'])->name('form4_data');
});

