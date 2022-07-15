<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FirstControoler;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::prefix('site1')->group(function () {
    Route::get('home', [Site1Controller::class, 'index'])->name('index');
    Route::get('about', [Site1Controller::class, 'about'])->name('about');
    Route::get('post', [Site1Controller::class, 'post'])->name('post');
    Route::get('contact', [Site1Controller::class, 'contact'])->name('contact');
});

Route::view('site2', 'website2.index')->name('index2');
