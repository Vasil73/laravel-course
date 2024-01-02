<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


Route::get('/employee', [EmployeeController::class, 'index'])->name ('index');
Route::post ('/index/store', [EmployeeController::class, 'store'])->name ('index.edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'update']);
