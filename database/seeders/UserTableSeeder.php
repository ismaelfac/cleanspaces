<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrador',
            'guard_name' => 'Acceso total al sistema',
        ]);
        Role::create([
            'name' => 'Suspendidos',
            'guard_name' => 'Sin acceso al sistema',
        ]);
        $role = Role::create([
            'name' => 'Auditor',
            'guard_name' => 'Puede ver o Generar reportes de los modulos',
        ]);
        $role->permissions()->sync([1, 2, 3, 4, 5, 10, 15, 24,25,26,27,29,30]);
        $role = Role::create([
            'name' => 'Asesores',
            'guard_name' => 'Asignado a los asesores: <br> Permite: Crear, actualizar desactivar.',
        ]);
        $role->permissions()->sync([1, 2, 3, 4, 5]);
        $user = User::create([
            'name' => 'ISMAEL E. LASTRE ALVAREZ',
            'email' => 'ismaelfac@gmail.com',
            'password' => bcrypt('BrwQ12-123'),
            'is_active' => true,
        ]);
        $user->assignRole($role->id === 1); //update roles
        $user = User::create([
            'name' => 'SINFOROSO GUMERSINDO',
            'email' => 'director@mail.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $user->assignRole($role->id === 2); //update roles
        $user = User::create([
            'name' => 'EMPERATRIS BENAVIDEZ ',
            'email' => 'asistentecomercial@mail.com',
            'password' => bcrypt('123'),
            'is_active' => true,
        ]);
        $user->assignRole($role->id === 3); //update roles 3, 4 en usuario3

    }
}
