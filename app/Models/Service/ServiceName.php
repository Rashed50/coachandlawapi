<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceName extends Model
{
    use HasFactory;

    protected $table = 'service_names';
    protected $fillable =[
        'serviceNameId',
        'serviceName',
        'serviceTypeId',
    ];
}
