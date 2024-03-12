<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeFormRequest;
use illuminate\Support\Facades\File;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeFormRequest $request)
    {
        $data = $request->validated();
        $employee = Employee::create(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'address' => $data['address'],
            ]
        );
        return redirect('/add-employee')->with('message', 'Employee added successfully!');
    }

    public function edit($employee_id)
    {
        $employee = Employee::find($employee_id);
        return view('employee.edit', compact('employee'));
    }

    public function update(EmployeeFormRequest $request, $employee_id)
    {
        $data = $request->validated();
        $employee = Employee::where('id', $employee_id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],

        ]);

        return redirect('/employees')->with('message', 'Employee updated successfully!');
    }

    public function destroy($employee_id)
    {
        $employee = Employee::find($employee_id)->delete();
        return redirect('/employees')->with('message', 'Employee deleted successfully!');
    }
}

