<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
        DB::beginTransaction();
        try {
            $it = User::create(array_merge([
                'email' => 'it@gmail.com',
                'name' => 'it',
            ], $default_user_value));

            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
            ], $default_user_value));

            $guru = User::create(array_merge([
                'email' => 'guru@gmail.com',
                'name' => 'guru',
            ], $default_user_value));

            $role_admin = Role::create(['name' => 'admin']);
            $role = Role::create(['name' => 'guru']);
            $role_it = Role::create(['name' => 'it']);

            Permission::create(['name' => 'read role']);
            Permission::create(['name' => 'create role']);
            Permission::create(['name' => 'update role']);
            Permission::create(['name' => 'delete role']);
            Permission::create(['name' => 'read configuration']);

            $role_admin->givePermissionTo([
                'read role',
                'create role',
                'update role',
                'delete role',
                'read configuration'
            ]);

            $admin->assignRole('admin');
            $guru->assignRole('guru');
            $it->assignRole('it');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
        
    }
}
