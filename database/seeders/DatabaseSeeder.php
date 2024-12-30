<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UserRole::firstOrCreate(
            ['role' => 'admin'] 
        );
        // UserRole::create(['role' => 'admin']);

        // User::factory()->create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@example.com',
        //     'password' => bcrypt('p@ssw0rd'),
        //     'role_id' => 1, //admin
        // ]);
    }
}
