<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Route for blog posts
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/all-post', [BlogController::class, 'index'])->name('blog.index');
