<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $admin = User::create([
        //     'name' => 'Mas Admin',
        //     'username' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'level' => 'admin',
        //     'image' => '',
        //     'password' => Hash::make('password')
        // ]);
        // $admin->assignRole('admin');
        
        $manajemen = User::create([
            'name' => 'Mas Manajemen',
            'username' => 'Manajemen',
            'email' => 'manajemen@gmail.com',
            'level' => 'manajemen',
            'image' => '',
            'password' => Hash::make('password')
        ]);
        $manajemen->assignRole('manajemen');

        $peminjam = User::create([
            'name' => 'Mas Peminjam',
            'username' => 'Peminjam',
            'email' => 'peminjam@gmail.com',
            'level' => 'peminjam',
            'image' => '',
            'password' => Hash::make('password')
        ]);
        $peminjam->assignRole('peminjam');
    }
}
