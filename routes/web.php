<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::get('/posts', function () {
    return redirect('/');
});
Route::get('/posts/{slug}', [PostController::class, 'show']);
