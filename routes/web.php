<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\JobContraller;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class , 'index']);
Route::get('/About', [indexController::class , 'About']);
Route::get('/Contact', [indexController::class , 'Contact']);
Route::get('/job' , [JobContraller::class , 'index']);
