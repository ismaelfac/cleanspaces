<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceOption extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'title',
        'description',
        'state'
    ];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
