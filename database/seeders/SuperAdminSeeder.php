<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
    // Creating Super Admin User
    $superAdmin = User::create([
        'name' => 'Superadmin',
        'email' => 'superadmin@roles.id',
        'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');
    // Creating Admin User
    $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@roles.id',
        'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin');
    // Creating Product Manager User
    $productManager = User::create([
        'name' => 'Operator',
        'email' => 'operator@roles.id',
        'password' => Hash::make('123456')
        ]);
        $productManager->assignRole('Operator');
    // Creating Admin Baak User
        $adminbaak = User::create([
            'name' => 'Admin Baak',
            'email' => 'adminbaak@roles.id',
            'password' => Hash::make('123456')
            ]);
            $adminbaak->assignRole('Admin Baak');

    // Creating Admin Keuangan User
        $adminkeuangan = User::create([
            'name' => 'Admin Keuangan',
            'email' => 'adminkeuangan@roles.id',
            'password' => Hash::make('123456')
            ]);
            $adminkeuangan->assignRole('Admin Keuangan');

    // Creating Mahasiswa User
        $mahasiswa = User::create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@roles.id',
            'password' => Hash::make('123456')
            ]);
            $mahasiswa->assignRole('Mahasiswa');
    }
}