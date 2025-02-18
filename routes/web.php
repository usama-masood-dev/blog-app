<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Pages Routes
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'homePage')->name('home');

    Route::get('/about', 'aboutPage')->name('about');

    Route::get('/services', 'servicesPage')->name('services');

    Route::get('/contact', 'contactPage')->name('contact');
});


// Dashborad Routes
Route::prefix('dashboard')->group(function () {
    // Profile Page
    Route::get('/profile', function () {
        return view('dashboard.profile')->with('name', 'Usama');
    })->name('profile');

    // Logout
    Route::get('/logout', function () {
        return redirect('/');
    })->name('logout');

    // Post Routes
    Route::prefix('/posts')->group(function () {
        Route::controller(PostController::class)->group(function () {
            Route::get('/', 'getAllPosts')->name('posts.index');

            Route::get('/create', 'createPostForm')->name('posts.create');

            Route::post('/', 'storePost')->name('posts.store');

            Route::get('/{id}', 'showSinglePost')->name('posts.show');

            Route::get('/{id}/update', 'updatePostForm')->name('posts.update');

            Route::put('/{id}', 'editPost')->name('posts.edit');

            Route::delete('/{id}', 'deletePost')->name('posts.destroy');
        });
    });
});
