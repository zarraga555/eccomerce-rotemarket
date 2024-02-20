<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissioinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);

        Permission::create(['name' => 'view user'])->syncRoles($admin);
        Permission::create(['name' => 'create user'])->syncRoles($admin);
        Permission::create(['name' => 'update user'])->syncRoles($admin);
        Permission::create(['name' => 'delete user'])->syncRoles($admin);
        Permission::create(['name' => 'view role'])->syncRoles($admin);
        Permission::create(['name' => 'create role'])->syncRoles($admin);
        Permission::create(['name' => 'update role'])->syncRoles($admin);
        Permission::create(['name' => 'delete role'])->syncRoles($admin);
        //Business Location
        Permission::create(['name' => 'view branch office location'])->syncRoles($admin);
        Permission::create(['name' => 'create branch office location'])->syncRoles($admin);
        Permission::create(['name' => 'update branch office location'])->syncRoles($admin);
        Permission::create(['name' => 'delete branch office location'])->syncRoles($admin);
        //Currencies
        Permission::create(['name' => 'view currency'])->syncRoles($admin);
        Permission::create(['name' => 'create currency'])->syncRoles($admin);
        Permission::create(['name' => 'update currency'])->syncRoles($admin);
        Permission::create(['name' => 'delete currency'])->syncRoles($admin);
        //Customer
        Permission::create(['name' => 'view customer'])->syncRoles($admin);
        Permission::create(['name' => 'create customer'])->syncRoles($admin);
        Permission::create(['name' => 'update customer'])->syncRoles($admin);
        Permission::create(['name' => 'delete customer'])->syncRoles($admin);
        //Supplier
        Permission::create(['name' => 'view supplier'])->syncRoles($admin);
        Permission::create(['name' => 'create supplier'])->syncRoles($admin);
        Permission::create(['name' => 'update supplier'])->syncRoles($admin);
        Permission::create(['name' => 'delete supplier'])->syncRoles($admin);
        //Brand
        Permission::create(['name' => 'view brand'])->syncRoles($admin);
        Permission::create(['name' => 'create brand'])->syncRoles($admin);
        Permission::create(['name' => 'update brand'])->syncRoles($admin);
        Permission::create(['name' => 'delete brand'])->syncRoles($admin);
        //Categories
        Permission::create(['name' => 'view categories'])->syncRoles($admin);
        Permission::create(['name' => 'create categories'])->syncRoles($admin);
        Permission::create(['name' => 'update categories'])->syncRoles($admin);
        Permission::create(['name' => 'delete categories'])->syncRoles($admin);
        //Units
        Permission::create(['name' => 'view units'])->syncRoles($admin);
        Permission::create(['name' => 'create units'])->syncRoles($admin);
        Permission::create(['name' => 'update units'])->syncRoles($admin);
        Permission::create(['name' => 'delete units'])->syncRoles($admin);
        //Products
        Permission::create(['name' => 'view products'])->syncRoles($admin);
        Permission::create(['name' => 'create products'])->syncRoles($admin);
        Permission::create(['name' => 'update products'])->syncRoles($admin);
        Permission::create(['name' => 'delete products'])->syncRoles($admin);
        //Taxes
        Permission::create(['name' => 'view taxes'])->syncRoles($admin);
        Permission::create(['name' => 'create taxes'])->syncRoles($admin);
        Permission::create(['name' => 'update taxes'])->syncRoles($admin);
        Permission::create(['name' => 'delete taxes'])->syncRoles($admin);
        //Shield
        Permission::create(['name' => 'view_role'])->syncRoles($admin);
        Permission::create(['name' => 'view_any_role'])->syncRoles($admin);
        Permission::create(['name' => 'create_role'])->syncRoles($admin);
        Permission::create(['name' => 'update_role'])->syncRoles($admin);
        Permission::create(['name' => 'delete_role'])->syncRoles($admin);
        Permission::create(['name' => 'delete_any_role'])->syncRoles($admin);
        $user1 = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com'
        ]);
        $user1->assignRole($admin);
    }
}
