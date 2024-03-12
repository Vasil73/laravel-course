<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserPdfController;
use App\Http\Controllers\LogController;


Route::get('/employee', [EmployeeController::class, 'index'])->name ('index');
Route::post ('/employee/store', [EmployeeController::class, 'store'])->name ('index.edit');
Route::post('/employee/update/{id}', [EmployeeController::class, 'update']);

Route::get('/books', [BookController::class, 'index'])->name ('books-index');
Route::post('/books/store', [BookController::class, 'store'])->name ('books-name');

Route::get ('/user/', [UsersController::class, 'index'])->name ('users');
Route::get ('/user/form', [UsersController::class, 'createUserForm']);
Route::get ('/user/{id}', [UsersController::class, 'getUserId']);
Route::post ('/user/create/', [UsersController::class, 'createUser'])->name ('user-create');
Route::delete ('/user/delete/{id}', [UsersController::class, 'deleteUserId'])->name ('user-delete');
Route::get ('/user/resume-pdf/{id}', [UserPdfController::class, 'indexUserPdf']);

Route::get ('/logs', [LogController::class, 'index']);
