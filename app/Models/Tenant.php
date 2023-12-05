<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    
    protected $table = 'tenants';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name', 
        'last_name', 
        'floor_no',
        'gender',
        'age',
        'phone_no'

    ];
    use HasFactory;
}
