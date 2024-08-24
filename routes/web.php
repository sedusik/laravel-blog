<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\Main\IndexController::class);

Auth::routes(['verify' => true]);

Route::prefix('main')->namespace('App\Http\Controllers\Main')->group(function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::prefix('contacts')->namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'ContactsController')->name('contact.index');
});

    Route::prefix('about')->namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'AboutController')->name('about.index');
});

Route::prefix('category')->namespace('App\Http\Controllers\Category')->group(function () {
    Route::get('/', 'IndexController')->name('category.index');
    Route::prefix('{category}/posts')->namespace('Post')->group(function () {
        Route::get('/', 'IndexController')->name('category.post.index');
    });
});

Route::prefix('post')->namespace('App\Http\Controllers\Post')->group(function () {
    Route::get('/', 'IndexController')->name('post.index');
    Route::get('/{post}', 'ShowController')->name('post.show');

    Route::prefix('{post}/comments')->namespace('Comment')->group(function () {
        Route::post('/', 'StoreController')->name('post.comments.store');
    });
    Route::prefix('{post}/likes')->namespace('Like')->group(function () {
        Route::post('/', 'StoreController')->name('post.likes.store');
    });
});

Route::prefix('personal')->namespace('App\Http\Controllers\Personal')->middleware(['auth', 'verified'])->group(function () {
    Route::prefix('main')->namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::prefix('liked')->namespace('Liked')->group(function () {
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{post}', 'DeleteController')->name('personal.liked.delete');
    });
    Route::prefix('comment')->namespace('Comment')->group(function () {
        Route::get('/', 'IndexController')->name('personal.comment.index');
        Route::delete('/{comment}', 'DeleteController')->name('personal.comment.delete');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comment.update');
        Route::get('/{comment}', 'EditController')->name('personal.comment.edit');
    });
});

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware(['auth', 'admin', 'verified'])->group(function () {
    Route::prefix('main')->namespace('Main')->group(function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::prefix('category')->namespace('Category')->group(function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });
    Route::prefix('tag')->namespace('Tag')->group(function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
    });
    Route::prefix('post')->namespace('Post')->group(function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete');
    });
    Route::prefix('user')->namespace('User')->group(function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });
});
