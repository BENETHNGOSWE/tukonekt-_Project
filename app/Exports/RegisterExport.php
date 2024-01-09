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
                'First Name' => $attendance->user->first_name,
                'Last Name' => $attendance->user->last_name,
                'Phone Number' => $attendance->user-> phone_number,
                'Email' => $attendance->user->email,
                'Gender' => $attendance->user->gender,
                'Age'=> $attendance->user->age_group,
                'Attendance Time' => $attendance->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'S/n',
            'User ID',
            'First Name',
            'Last Name',
            'Phone Number',
            'Email',
            'Gender',
            'Age',
            'Attendance Time',
        ];
    }
}
