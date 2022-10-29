<?php

use App\Http\Controllers\Auth\{LoginController, RegisterController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', RegisterController::class);

Route::post('/login', LoginController::class);

Route::middleware('auth:api')->get('/user', fn (Request $request) => $request->user());
