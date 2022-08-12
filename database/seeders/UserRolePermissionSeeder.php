<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ];

        DB::beginTransaction();
        try {
            $pegawai = User::create(array_merge([
                'email' => 'pegawai@gmail.com',
                'name' => 'pegawai',
            ], $default_user_value));
    
            $admin_pd = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'admin',
            ], $default_user_value));
    
            $super_admin = User::create(array_merge([
                'email' => 'erkbkpsdm3@gmail.com',
                'name' => 'PJLP',
            ], $default_user_value));
    
            $role_pegawai = Role::create(['name' => 'pegawai']);
            $role_admin_pd = Role::create(['name' => 'admin_pd']);
            $role_super_admin = Role::create(['name' => 'super_admin']);
    
            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);

            $role_super_admin->givePermissionTo('read role');
            $role_super_admin->givePermissionTo('create role');
            $role_super_admin->givePermissionTo('update role');
            $role_super_admin->givePermissionTo('delete role');

            $pegawai->assignRole('pegawai');
            $admin_pd->assignRole('admin_pd');
            $super_admin->assignRole('super_admin');

            DB::commit();
        } catch (\Throwable $th){
            DB::rollBack();
        }
    }
}
