<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingInfo extends Model
{
    use HasFactory;
    protected $table = 'booking_infos';
    protected $fillable =[
        'bookingId',
        'mentorId',
        'menteeId',
        'payAmount',
        'transactionId',
        'bookingCode',
        'agreementForm',
    ];

     
}
