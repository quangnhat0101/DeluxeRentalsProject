<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $table = 'drivers';
    protected $fillable = [
        'DriverName',
        'DriverLicense',
        'DriverDOB',
        'DriverPic',
        'DriverAdd',
        'DriverMail',
        'DriverPhone',
        'DriverStatus',
        'CurrentDriver',
    ];
}
