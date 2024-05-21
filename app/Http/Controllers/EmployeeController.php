<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
       $employees = Employee::all();

       return view('employee.index',['employees' => $employees]);
    }

    public function create(){
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Employee::create($data);
        return redirect()->route('employee.index');

    }

    public function edit($id)
    {
        $employee =  Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->except('_token', '_method');
        
        $employee = Employee::findOrFail($data['id']);
        $employee->update($data);

        Departament::firstOrCreate(['name' => $data['departament']]);

        return redirect()->route('employee.index');
    
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employee.index');

    }
}
