<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\StCategoryController;
use App\Http\Controllers\StDishController;
use App\Http\Controllers\StCartAddonController;
use App\Http\Controllers\StCartController;
use App\Http\Controllers\StVieworderstatusController;
use App\Http\Controllers\StReviewController;
use App\Http\Controllers\StOrderNewController;

Route::middleware('guest')->group( function () {

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('register');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest')
    ->name('login');

    });

    Route::get('/merchant', [MerchantController::class, 'index']);

Route::get('/categories', [StCategoryController::class, 'index']);
Route::get('/dishes', [StDishController::class, 'index']);
Route::get('/cart', [StCartController::class, 'index']);
Route::get('/cartaddon', [StCartAddonController::class, 'index']);
Route::get('/orderstatus', [StVieworderstatusController::class, 'index']);
Route::post('/reviews/submit', [StReviewController::class, 'store']);
Route::post('/orders/submit', [StOrderNewController::class, 'store']);



    Route::middleware(['auth:sanctum'])->group(function () {

    });

