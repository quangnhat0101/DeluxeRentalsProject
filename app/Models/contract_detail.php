<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract_detail extends Model
{
    use HasFactory;
    protected $table = 'contract_details';
    protected $fillable = [
        'ContractDetailID',
        'ContractID',
        'DriverID',
        'CarPlate',
        'Departure',
        'Arrival',
    ];
 
}
