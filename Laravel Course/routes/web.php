<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/test-database', function (){
    $employee = new Employee();
    $employee->name = 'Василий Шубин';
    $employee->email = 'vas@example.com';
    $employee->save ();

    return 'Сотрудник сохранен в базе данных.';
});
