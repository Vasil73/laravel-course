<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get ('/test-database', function (){
    $employee = new Employee();
    $employee->name = 'Василий Шубин';
    $employee->email = 'vas@example.com';
    $employee->save ();

    return 'Сотрудник сохранен в базе данных.';
});

Route::get ('/', function () {
    $data = [
        'name' => 'Vasily Shubin',
        'age' => '50',
        'position' => 'Разработчик',
        'address' => 'ННовгород',
    ];

    return view ('home', $data);
});

Route::get ('/contacts', function () {
    $data = [
        'address' => 'NNovgorod',
        'post_code' => '12345',
        'email' => 'vs@test.ru',
        'phone' => '555-1234'
    ];

    return view ('contacts', $data);
});
