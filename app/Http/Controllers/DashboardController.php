<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = "Dashboard";
        $date = now();
        $employees = Employee::whereMonth('birth_date', '>', $date->month)
                                ->orWhere(function ($query) use ($date) {
                                    $query->whereMonth('birth_date', '=', $date->month)
                                        ->whereDay('birth_date', '>=', $date->day);
                                })
                                ->orderByRaw("DAYOFMONTH('birth_date')", "ASC")
                                ->get();

        return view('dashboard', [
            'title' => $title,
            'employees' => $employees
        ]);
    }
}
