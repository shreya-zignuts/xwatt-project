<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class,'page'])->name('welcome');
Route::get('/warranty-request', [UserController::class,'warrantyRequest'])->name('warranty');
Route::get('/service-request', [UserController::class,'serviceRequest'])->name('service');

Route::post('create', [UserController::class,'create'])->name('user.create');