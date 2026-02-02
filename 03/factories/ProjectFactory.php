<?php

namespace Database\Factories;

use App\Models\Technologie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'technologie_id' => \App\Models\Technologie::factory(),
            'name' => fake()->name(),
            'description' => fake()->text(),
            'code_link' => fake()->url(),
            'demo_link' => fake()->url(),
            'show' => true,
        ];
    }
}
