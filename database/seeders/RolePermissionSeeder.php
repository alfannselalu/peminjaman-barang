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

    $permissions = [
        'entri_user',
        'entri_penyedia',
        'entri_alat_bahan',
        'edit_alat_bahan',
        'entri_barang_masuk',
        'entri_barang_keluar',
        'edit_peminjam',
        'entri_peminjam'
    ];

    foreach ($permissions as $permissionName) {
        $permission = Permission::updateOrCreate(
            ['name' => $permissionName],
            ['name' => $permissionName]
        );

        // Role Admin
        $role_admin->givePermissionTo($permission);

        // Role Manajemen
        if (in_array($permissionName, ['entri_alat_bahan', 'edit_alat_bahan', 'entri_barang_masuk', 'entri_barang_keluar'])) {
            $role_manajemen->givePermissionTo($permission);
        }

        // Role Peminjam
        if (in_array($permissionName, ['edit_peminjam', 'entri_peminjam'])) {
            $role_peminjam->givePermissionTo($permission);
        }
    }

    // Assign Role
    $user1 = User::find(1);
    $user2 = User::find(2);
    $user3 = User::find(3);

    $user1->assignRole(['admin']);
    $user2->assignRole(['manajemen']);
    $user3->assignRole(['peminjam']);
}



}
