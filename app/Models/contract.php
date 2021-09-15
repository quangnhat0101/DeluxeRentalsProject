<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;
    protected $table = 'contracts';
    protected $primaryKey = 'ContractID';
    protected $fillable = [
        'ContractID',
        'ContractNo',
        'ContractDate',
        'CusID',
        'StaffID',
        'ContractStatus',
    ];
  
}
