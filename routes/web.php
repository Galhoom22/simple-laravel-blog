<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']); // to list all posts

Route::get('/posts/create', [PostController::class, 'create']); // to show the form
Route::get('/posts/{post}', [PostController::class, 'show']); // to show a single post
Route::post('/posts', [PostController::class, 'store']); // to store the form data

// Routes for updating a post
Route::get('/posts/{post}/edit', [PostController::class, 'edit']); // Show the form to edit a post
Route::put('/posts/{post}', [PostController::class, 'update']); // Submit the updated data
