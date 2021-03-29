<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\EmployeeController;

Auth::routes();

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/request', [RequestController::class, 'index'])->name('request');
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
Route::post('/employee', [EmployeeController::class, 'store']);
