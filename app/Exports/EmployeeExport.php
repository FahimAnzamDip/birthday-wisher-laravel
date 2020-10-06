<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class EmployeeExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Employee::select('id', 'name', 'email', 'phone', 'birth_date')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Mobile',
            'Birth Date'
        ];
    }
}
