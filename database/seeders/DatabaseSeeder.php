<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;
use UserRoleSeeder,SerieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Role::create(['nombre' => 'user']);
        // Role::create(['nombre' => 'admin']);
        // Role::create(['nombre' => 'guest']);
            $this->call([
                PeliculaSeeder::class,
                SerieSeeder::class,
                UserRole::class
            ]);
    }
}

//create users,create password reset,