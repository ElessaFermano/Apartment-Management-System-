<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'amount', 
        'date_payment', 
        'method',
        'received',
        'tenant_id'

    ];

    use HasFactory;
}
