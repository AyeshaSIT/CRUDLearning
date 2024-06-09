<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $primaryKey = "customer_id" ;
    protected $fillable = [
        'customer_name', 'customer_gender', 'customer_address', 'customer_dob'
    ];
    use HasFactory;
}
