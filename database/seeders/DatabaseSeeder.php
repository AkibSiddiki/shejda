<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\ProjectBooking::create([
            'project_id' => 13,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'message' => 'This is a test message',
            'status' => 1,
            'is_seen' => 0,
        ]);
    }
}
