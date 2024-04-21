<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;


Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/posts', [PostController::class, 'posts'])->name('posts');
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/roles', [RoleController::class, 'roles'])->name('roles');
Route::get('/users/{id}', [UserController::class, 'user_show'])->name('user_show');
Route::get('/posts/{id}', [PostController::class, 'post_show'])->name('post_show');
Route::get('/roles/{id}', [RoleController::class, 'role_show'])->name('role_show');