<?php

namespace App\Models\Mentor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $table = 'mentors';
    protected $fillable =[
        'mentorId',
        'firstName',
        'middleName',
        'lastName',
        'email',
        'profileDescription',
        'mobileNo',
        'profilePhoto',
        'cvPath',
        'trainingForm',
        'countryCode',
        'address',
        'hiringPrice',
        'rating',
        'isAvailableToHire',
        'noOfHourFoMentee',
        'totalMentees',
        'totalEarn',
        'totalWithdraw',
        'universityId',
        'serviceId',
        'universityName',
        'serviceName'
    ];


    
}
