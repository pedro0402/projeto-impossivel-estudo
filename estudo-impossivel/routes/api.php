<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/teste', [TestController::class, 'teste']);

Route::post('/usuario', [UsuarioController::class, 'store']);
