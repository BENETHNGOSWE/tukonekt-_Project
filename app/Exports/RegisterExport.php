<?php

namespace App\Exports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegisterExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Attendance::with('user')->get();
    }

    public function headings(): array
    {
        return [
            'S/n',
            'User ID',
            'User Name',
            'Attendance Time',
        ];
    }
}
