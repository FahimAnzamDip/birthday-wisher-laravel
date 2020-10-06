<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeesController extends Controller
{

    public function index() {
        $title = "Dashboard - Employees";
        $employees = Employee::all();

        return view('pages.employees.index', [
            'title'     => $title,
            'employees' => $employees
        ]);
    }


    public function create() {
        $title = "Dashboard - Create Employee";

        return view('pages.employees.create', [
            'title' => $title
        ]);
    }


    public function store(Request $request) {
        $request->validate([
            'name'       => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'birth_date' => 'required'
        ]);

        Employee::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'birth_date' => $request->birth_date,
            'created_at' => Carbon::now()
        ]);
        toast('Employee Created!', 'success');

        return redirect()->route('employees.index');
    }


    public function edit($id) {
        $title = "Dashboard - Edit Employee";
        $employee = Employee::find($id);

        return view('pages.employees.edit', [
            'title'    => $title,
            'employee' => $employee
        ]);
    }


    public function update(Request $request, $id) {
        $request->validate([
            'name'       => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'birth_date' => 'required'
        ]);

        Employee::find($id)->update([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'birth_date' => $request->birth_date
        ]);
        toast('Employee Updated!', 'success');

        return redirect()->route('employees.index');
    }


    public function destroy($id) {
        Employee::find($id)->delete();
        toast('Employee Deleted!', 'warning');

        return redirect()->route('employees.index');
    }


    public function export() {
        return Excel::download(new EmployeeExport(), 'employees.xlsx');
    }
}
