<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;



Route::get ('/index', [EmployeeController::class, 'index'])->name ('index');
Route::get ('/index/store', [EmployeeController::class, 'store'])->name ('index.edit');
Route::put ('/employee/update/{id}', [EmployeeController::class, 'update'])->name ('employee.update');
