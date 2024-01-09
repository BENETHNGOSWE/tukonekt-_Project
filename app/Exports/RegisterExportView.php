<?php

namespace App\Exports;

use App\Models\Register;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegisterExportView implements FromCollection, WithHeadings,
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Register::select('first_name', 'last_name', 'phone_number',)->get();
    // }

    public function collection()
    {
        $registers = Register::select('id','first_name', 'middlename', 'last_name', 'phone_number')->get();

     

        return $registers;
    }

    public function headings(): array 
    {
        return [
            'User Id',
            'First Name',
            'Surname',
            'Last Name',
            'Phone Number',

        ];
    }
}
