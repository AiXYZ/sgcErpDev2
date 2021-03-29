<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::get();

        return view('employee', [
            'employees' => $employees
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'employeeId' => ['required', 'integer'],
            'name' => ['required'],
        ]);

        Employee::create([
            'employee_id' => $request['employeeId'],
            'name' => $request['name'],
        ]);

        return back();
    }
}
