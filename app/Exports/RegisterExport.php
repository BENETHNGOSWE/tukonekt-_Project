<?php

namespace App\Exports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegisterExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Attendance::all();
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
