<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class management_staff extends Model
{
    use HasFactory;
    protected $table = 'management_staffs';
    protected $primaryKey = 'StaffID';
    protected $fillable = [
        'StaffName','StaffPass','StaffDOB','StaffPhone','StaffAdd','StaffMail','StaffSalary','StaffPic','CurrentStaff',
    ];

}
