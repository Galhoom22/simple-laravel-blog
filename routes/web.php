<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostController::class, 'index']); // to list all posts
Route::get('/posts/create', [PostController::class, 'create']); // to show the form
Route::post('/posts', [PostController::class, 'store']); // to store the form data