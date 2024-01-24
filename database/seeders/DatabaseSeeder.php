<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Organization;
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
        $organization = Organization::create([
            'name' => 'Wycombe Food Hub',
            'slug' => 'wycombe-food-hub',
            'email' => 'contact@wycombefoodhub.org',
            'website_url' => 'http://wycombefoodhub.org',
            'phone' => '01494913626',
        ]);

        $organization->save();

        $admin = User::create([
            'name' => "Admin",
            'organization_id' => $organization->id,
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
