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
        return Attendance::with('user')->get()->map(function ($attendance) {
            return [
                'S/n' => $attendance->id,
                'User Id' => $attendance->user->id,
                'User Name' => $attendance->user->first_name,
                'Attendance Time' => $attendance->created_at,
            ];
        });
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
