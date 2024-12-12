<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])-> name("dashboard.index");
Route::post('/post', [PostController::class, 'store'])-> name("post.store");
Route::delete('/post/{id}', [PostController::class, 'destroy'])-> name("post.destroy");

