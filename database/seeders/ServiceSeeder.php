<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/services.json");
        $services = json_decode($data, true);
        foreach ($services as $value) {
            Service::create([
                'title' => $value['title'],
                'description' => $value['description'],
                'state' => $value['state']
            ]);
        }
    }
}
