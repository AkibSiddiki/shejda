<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'username' => 'root',
            'email' => 'admin@admin.com',
            'password' => Hash::make('root@123'),
            'role' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
