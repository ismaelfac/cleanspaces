<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['state_customer', 'type_dni', 'dni', 'business_name', 'last_name', 'name', 'slug', 'phone', 'landline', 'email'
    ];

    public function getRouteKeyName() {
        return 'slug';
    }
}
