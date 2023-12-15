<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => "Admin",
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        $superadmin = User::create([
            'name' => "Super Admin",
            'email' => 'superadmin@admin.com',
            'password' => bcrypt('admin')
        ]);

        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'superadmin']);

        $admin->assignRole($role1);
        $superadmin->assignRole($role2);
    }
}
