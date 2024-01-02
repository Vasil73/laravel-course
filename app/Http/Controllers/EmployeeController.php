<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Employee;

    class EmployeeController extends Controller
    {

    public function index()
    {
        $employees = Employee::all();
        return view('employees/index', compact ('employees'));
    }

        public function store(Request $request)
    {
        $employees = new Employee;

        $employees->name = $request->input('name');
        $employees->surname = $request->input('surname');
        $employees->email = $request->input('email');
        $employees->position = $request->input('position');
        $employees->address = $request->input('address');

        $json_data = json_decode($request->input('json_data'), true);

        var_dump ($json_data);


        $employees->processJsonData($json_data);

        $employees->save();

         return redirect('/');
    }

        public function update(Request $request, $id): \Illuminate\Http\JsonResponse

        {
            $employee = Employee::find ( $id );
            if (!$employee) {
                return response ()->json ( ['error' => 'User is not found'], 404 );
            }

            $employee->name = $request->input ( 'name' );
            $employee->surname = $request->input ( 'surname' );
            $employee->email = $request->input ( 'email' );
            $employee->position = $request->input ( 'position' );
            $employee->address = $request->input ( 'address' );
            $employee->save ();
            $json_data = $request->input ( 'json_data' );
            if (is_array ( $json_data )) {
                $employee->json_data = json_encode ( $json_data );
                foreach ($json_data as $key => $value) {
                    $employee->$key = $value;
                }
            } else {
                $employee->json_data = $json_data;
            }

            $json_data = json_decode($request->input('json_data'), true);

            $employee->processJsonData($json_data);

            var_dump ($json_data);

            return response()->json([
                'message' => 'Data updated successfully',
                'employee' => $employee,
                'path' => $this->getPath ($request),
                'url' => $this->getUrl ($request)
            ]);

        }

        public function getPath(Request $request): string
        {
            $path = $request->path ();
            return "Path: " . $path;
        }

        public function getUrl(Request $request): string
        {
            $url = $request->url ();
            return "URL: " . $url;
        }

    }
