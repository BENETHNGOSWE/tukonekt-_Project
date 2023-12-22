<?php

namespace App\Exports;

use App\Models\Register;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegisterExportView implements FromCollection
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
        $registers = Register::select('id','first_name', 'last_name', 'phone_number')->get();

        // Add a new attribute for the QR code
        $registers->each(function ($register) {
            $register->qr_code = qrcode('', $register->id);
        });

        return $registers;
    }
}
