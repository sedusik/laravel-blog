<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\Main\IndexController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::prefix('main')->namespace('Main')->group(function () {
        Route::get('/', 'IndexController');
    });
    Route::prefix('category')->namespace('Category')->group(function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
    });
});
