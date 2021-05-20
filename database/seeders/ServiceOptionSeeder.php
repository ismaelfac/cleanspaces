<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceOption;

class ServiceOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents("database/Queries/serviceOptions.json");
        $services = json_decode($data, true);
        foreach ($services as $value) {
            ServiceOption::create([
                'service_id' => 1,
                'title' => $value['title'],
                'description' => $value['description'],
                'state' => $value['state']
            ]);
        }
    }
}
