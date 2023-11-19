<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

    class EmployeeController extends Controller
    {
        public function index()
        {
            $employees = Employee::all ();
            return view ( 'employees.index', compact ( 'employees' ) );
        }

        public function store(Request $request)
        {
            $name = $request->input ( 'name' );
            $surname = $request->input ( 'surname' );
            $email = $request->input ( 'email' );
            $position = $request->input ( 'position' );
            $address = $request->input ( 'address' );
            $json_data = $request->input ( 'json_data' );


            $employee = Employee::all ();
            $employee->name = $name;
            $employee->surname = $surname;
            $employee->email = $email;
            $employee->position = $position;
            $employee->address = $address;
            $employee->json_data = $json_data;
            $employee->json_data = $request->input ( 'json_data' );

            $employee->save ();

            return response ()->json ( [
                'message' => 'Data saved successfully',
                'employee' => $employee
            ] );
        }

        public function update(Request $request, $id)

        {
            $employee = Employee::find($id);
            if (!$employee) {
                return response()->json(['error' => 'User is not found'], 404);
            }

            $employee->name = $request->input('name');
            $employee->surname = $request->input('surname');
            $employee->email = $request->input('email');
            $employee->position = $request->input('position');
            $employee->address = $request->input('address');

            $json_data = $request->input('json_data');
            if (is_array($json_data)) {
                $employee->json_data = json_encode($json_data);
                foreach ($json_data as $key => $value) {
                    $employee->$key = $value;
                }
            } else {
                $employee->json_data = $json_data;
            }

            $employee->save();

            return response()->json([
                'message' => 'Data updated successfully',
                'employee' => $employee,
                'path' => $this->getPath ($request),
                 'url' => $this->getUrl ($request)
            ]);

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
