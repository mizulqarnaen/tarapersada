<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ArticleController;

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['web', 'auth']) // Add 'auth' if you want login protection
    ->group(function () {

        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });

        // Dashboard
        Route::view('/dashboard', 'admin.pages.dashboard')->name('dashboard');

        // Courses CRUD
        Route::resource('courses', CourseController::class);

        // Categories CRUD
        Route::resource('categories', CategoryController::class);

        // Articles CRUD
        Route::resource('articles', ArticleController::class);
    });
