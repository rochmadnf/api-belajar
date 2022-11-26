<?php

use App\Http\Controllers\Auth\{LoginController, LogoutController, RegisterController};
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', RegisterController::class);

Route::post('/login', LoginController::class);

Route::middleware('auth:api')->group(function () {
    Route::get('/user', fn (Request $request) => new UserResource($request->user()));
    Route::middleware('role:admin')->group(function () {
        Route::get('/myrole', function () {
            return response()->json(['message' => "You're Admin 😁"], 200);
        });
    });
    Route::post('/logout', LogoutController::class);
});
