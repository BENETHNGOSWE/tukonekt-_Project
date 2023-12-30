<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middlename',
        'last_name',
        'email',
        'address_line_2',
        'city',
        'age_group',
        'phone_number',
        'gender',
        'email_verified',
     
    ];
}
