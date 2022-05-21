<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'address';
    protected $fillable = [
        'uid',
        'f_name',
        'l_name',
        'company',	
        'address_1',
        'address_2',
        'mobile',
        'email',
        'country_id',
        'city',
        'postcode',
        'zone_id',
        'comment',
        'payment_method',	
        'shipping_method',	
        'address_type',
        'created_at',
        'updated_at',
       
        
    ];
}
