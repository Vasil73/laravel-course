<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

    class EmployeeController extends Controller
    {
        public function index()
        {
            $employees = Employee::all();
            return view('employees.index', compact ('employees'));
        }

        public function store(Request $request)
        {

            $name = $request->input('name');
            $surname = $request->input('surname');
            $email = $request->input('email');
            $position = $request->input('position');
            $address = $request->input('address');
            $json_data = $request->input('json_data');

            $data = json_decode($json_data, true);

            foreach ($data as $key => $value) {
                $$key = $value;
            }

            $employee = new Employee();
            $employee->name = $name;
            $employee->surname = $surname;
            $employee->email = $email;
            $employee->position = $position;
            $employee->address = $address;

            return $employee->save();

        }

        public function edit($id)
        {
            $employee = Employee::find($id);

            return view('employees/employee-update', compact('employee'));
        }

        public function update(Request $request, $id)
        {

            $employee = Employee::find($id);
            $employee->name = $request->input('name');
            $employee->surname = $request->input('surname');
            $employee->email = $request->input('email');
            $employee->position = $request->input('position');
            $employee->address = $request->input('address');
            $json_data = $request->input('json_data');

            $data = json_decode($json_data, true);

            foreach ($data as $key => $value) {
                $$key = $value;
            }

            $employee->save();

            return redirect (route ('index'));
        }

        public function getPath(Request $request)
        {
            $path = $request->path ();
            return "Path: " . $path;
        }

        public function getUrl(Request $request)
        {
            $url = $request->url ();
            return "URL: " . $url;
        }

    }

