<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = 'checkout';
    protected $fillable = [
        'uid',
        'f_name',
        'l_name',
        'company',	
        'address_1',
        'address_2',
        'mobile',
        'email',
        'country'	,
        'city',
        'postcode',
        'zone',
        'comment'	,
        'payment_method',	
        'shipping_method',	
        'address_type'
       
        
    ];
}
