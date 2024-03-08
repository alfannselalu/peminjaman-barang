<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            ['name' => 'admin'],
            ['name' => 'admin']
        );
        $role_manajemen = Role::updateOrCreate(
            ['name' => 'manajemen'],
            ['name' => 'manajemen']
        );
        $role_peminjam = Role::updateOrCreate(
            ['name' => 'peminjam'],
            ['name' => 'peminjam']
        );

        $permission = Permission::updateOrCreate(
            ['name' => 'entri_user'],
            ['name' => 'entri_user']

        );

        $permission2 = Permission::updateOrCreate(
            ['name' => 'entri_penyedia'],
            ['name' => 'entri_penyedia']

        );

        $permission3 = Permission::updateOrCreate(
            ['name' => 'entri_alat_bahan'],
            ['name' => 'entri_alat_bahan']

        );

        $permission4 = Permission::updateOrCreate(
            ['name' => 'edit_alat_bahan'],
            ['name' => 'edit_alat_bahan']

        );

        $permission5 = Permission::updateOrCreate(
            ['name' => 'entri_barang_masuk'],
            ['name' => 'entri_barang_masuk'],

        );
        
        $permission6 = Permission::updateOrCreate(
            ['name' => 'entri_barang_keluar'],
            ['name' => 'entri_barang_keluar']

        );

        $permission7 = Permission::updateOrCreate(
            ['name' => 'edit_peminjam'],
            ['name' => 'edit_peminjam']

        );

        $permission8 = Permission::updateOrCreate(
            ['name' => 'entri_peminjam'],
            ['name' => 'entri_peminjam']

        );


        //Role Admin
        $role_admin->givePermissionTo($permission);
        $role_admin->givePermissionTo($permission2);
        $role_admin->givePermissionTo($permission5);
        $role_admin->givePermissionTo($permission3);
        $role_admin->givePermissionTo($permission4);
        $role_admin->givePermissionTo($permission6);
        $role_admin->givePermissionTo($permission7);
        $role_admin->givePermissionTo($permission8);

        //Role Manajemen
        $role_manajemen->givePermissionTo($permission3);
        $role_manajemen->givePermissionTo($permission4);
        $role_manajemen->givePermissionTo($permission5);
        $role_manajemen->givePermissionTo($permission6);

        //Role Peminjam
        $role_peminjam->givePermissionTo($permission7);
        $role_peminjam->givePermissionTo($permission8);

        $user = User::find(1);
    
        //Assign Role
        $user->assignRole(['admin']);
    }


}
