<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use App\Models\Technologie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     // User::factory()->create([
    //     //     'name' => 'Test User',
    //     //     'email' => 'test@example.com',
    //     // ]);
    // }

    public function run(): void
    {
        // $technologie = ['PHP', 'HTML', 'CSS', 'JS', 'SQL'];

        // \App\Models\Technologie::factory()
        //     ->count(5)
        //     ->state(new \Illuminate\Database\Eloquent\Factories\Sequence(
        //         ...array_map(fn ($item) => ['name' => $item], $technologie)
        //     ))
        //     ->create();
        // Project::factory(50)->create();
        
        Technologie::factory(50)->create();
    }

}
