<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserPdfController;

//
//Route::get('/employee', [EmployeeController::class, 'index'])->name ('index');
//Route::post ('/employee/store', [EmployeeController::class, 'store'])->name ('index.edit');
//Route::post('/employee/update/{id}', [EmployeeController::class, 'update']);

//Route::get('/books', [BookController::class, 'index'])->name ('books-index');
//Route::post('/books/store', [BookController::class, 'store'])->name ('books-name');

Route::get ('/user/', [UsersController::class, 'index']);
Route::get ('/user/{id}/', [UsersController::class, 'getUserId']);
Route::post ('/user/create/', [UsersController::class, 'createUser'])->name ('user-create');
Route::delete ('user/delete', [UsersController::class, 'userDelete']);
Route::get ('user/resume-pdf', [UserPdfController::class, 'indexPdf']);
