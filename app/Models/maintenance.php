<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    use HasFactory;
    protected $table ='maintenances';
    protected $primaryKey ='MaintenanceID';
    protected $filltable =[
        'MaintenanceDate',
        'CarID',
        'CarPlate',
        'Comment',
    ];

}
