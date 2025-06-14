<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Owner;
use App\Http\Controllers\Public;
use App\Http\Controllers\User\BookingController;
use Illuminate\Support\Facades\Route;

Route::post('auth/register', RegisterController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('owner')->group(function () {
        Route::get('properties',
            [Owner\PropertyController::class, 'index']);
        Route::post('properties',
            [Owner\PropertyController::class, 'store']);
        Route::post('properties/{property}/photos',
            [Owner\PropertyPhotoController::class, 'store']);
        Route::post('properties/{property}/photos/{photo}/reorder/{newPosition}',
            [Owner\PropertyPhotoController::class, 'reorder']);
    });

    Route::prefix('user')->group(function () {
        Route::resource('bookings', BookingController::class)->withTrashed();
    });
});

Route::get('search', Public\PropertySearchController::class);
Route::get('properties/{property}', Public\PropertyController::class);
Route::get('apartments/{apartment}', Public\ApartmentController::class);
