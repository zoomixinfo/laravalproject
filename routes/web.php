<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles', [ArticlesController::class,'index']);
Route::get('/articles/create', [ArticlesController::class,'create']);
Route::post('/articles', [ArticlesController::class,'store']);
Route::get('/articles/{article}', [ArticlesController::class,'show']);
Route::get('/articles/{article}/edit', [ArticlesController::class,'edit']);
Route::put('/articles/{article}', [ArticlesController::class,'update']);
Route::delete('/articles/{article}', [ArticlesController::class,'destroy']);
