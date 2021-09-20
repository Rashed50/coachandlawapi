<?php

namespace App\Models\Mentee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentee extends Model
{
    use HasFactory;
    protected $table = 'mentees';
    protected $fillable =[
        'menteeId',
        'firstName',
        'middleName',
        'lastName',
        'email',
        'profileDescription',
        'mobileNo',
        'profilePhoto',
        'password',
        'cvPath',
        'countryCode',
        'devicePushRegToken',
        'address',
        'paymentUserAccountId',
        'universityId',
        'serviceId',
    ];
}

