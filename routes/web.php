<?php

use App\Http\Controllers\JobContraller;
use App\Http\Controllers\ProjectContraller;
use App\Http\Controllers\SalaryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/job' , [JobContraller::class , 'index']);
