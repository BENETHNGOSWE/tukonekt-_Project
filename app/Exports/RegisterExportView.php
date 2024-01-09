<?php

namespace App\Exports;

use App\Models\Register;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegisterExportView implements FromCollection, WithHeadings
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
        $registers = Register::select(
            'id',
            'first_name',
            'middlename',
            'last_name', 
            'email', 
            'address_line_2',
            'city', 
            'age_group',
            'gender',
            'phone_number')->get();

       $registers->each(function ($register) {
           $register->qr_code = qrcode('', $register->id);
       });

        return $registers;
    }

    public function headings(): array 
    {
        return [
            'User Id',
            'First Name',
            'Surname',
            'Last Name',
            'Email',
            'Address',
            'City',
            'Age',
            'Gender',
            'Phone Number',
            'Qrcode',

        ];
    }
}
