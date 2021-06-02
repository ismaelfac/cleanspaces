<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\{ Service };

class ServiceRepository extends BaseRepository
{
    public function getModel()
    {
        return new Service();
    }

    public function getServices()
    {
        return Service::all();
    }
}