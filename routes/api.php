<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [App\Actions\Fortify\CreateNewUser::class, 'create']);
Route::post('/login', [App\Actions\Fortify\CreateNewUser::class, 'login']);
Route::post('/logout-passport', [App\Actions\Fortify\CreateNewUser::class, 'logout'])->name('logout-passport');

Route::get('/users', function () {
    return response()->json(\App\Models\User::all(), 200);
})->middleware('auth:api');

