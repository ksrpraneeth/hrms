<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $request = $request->all();
        Employee::create($request);
    }

    public function get()
    {
        $employeeData = Employee::all();
        $data =[];
        $data['data']=$employeeData;
        return response()->json($data);
    }
}
