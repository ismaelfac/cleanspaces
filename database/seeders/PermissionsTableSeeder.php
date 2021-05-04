<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{

    public function run()
    {
        $data = file_get_contents("database/Queries/permissions.json");
        $permissions = json_decode($data, true);
        foreach ($permissions as $value) {
            Permission::create([
                'name' => $value['name'],
                'guard_name' => $value['description'],
            ]);
        }
    }
}
