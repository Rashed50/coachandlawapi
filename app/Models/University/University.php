<?php

namespace App\Models\University;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $table = 'universities';
    protected $fillable =[
        'universityId',
        'universityName',
        'countryCode',
        'CountryState',
    ];
}



