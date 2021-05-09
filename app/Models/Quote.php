<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'person_type',
        'names',
        'email',
        'phone',
        'comments',
        'checked_notifications',
        'checked_rap',
        'state'
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
