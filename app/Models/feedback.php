<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    protected $table ='feedback';
    protected $primaryKey = 'FeedbackID';
    protected $fillable = [
        'ContractNo',
        'Cus_ID',
        'DriverAttitude',
        'Punctuality',
        'ReasonalPrice',
        'Comment',
    ];
   
}
