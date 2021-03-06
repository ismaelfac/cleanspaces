<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{ Quote, ServiceOption };
class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'state'
    ];

    public $timestamps = false;

    public function getRouteKeyName() {
        return 'slug';
    }

    public function quote()
    {
        return $this->belongsTo(Quote::class);
    }

    public function serviceOptions()
    {
        return $this->belongsTo(serviceOption::class);
    }
}
