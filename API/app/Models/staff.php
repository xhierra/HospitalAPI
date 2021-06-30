<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;

    public $timestamps = false; 

    protected $fillable = [
        'id ',
        'staff_fname',
        'staff_mname',
        'staff_lname',
        'full_address',
        'telephone_number',
        'date_of_birth',
        'sex',
        'nin'
    ];
}
