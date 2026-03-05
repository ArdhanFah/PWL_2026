<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name("index");

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'food_baverage'])->name('category.food_baverage');
    Route::get('/beauty-health', [ProductController::class, 'beauty_health'])->name('category.beauty_health');
    Route::get('/home-care', [ProductController::class, 'home_care'])->name('category.home_care');
    Route::get('/baby-kid', [ProductController::class, 'baby_kid'])->name('category.baby_kid');
});
Route::get('user/{id}/name/{name}', [UserController::class, 'user'])->name('user');
Route::get('penjualan', [PenjualanController::class, 'penjualan'])->name('penjualan');
