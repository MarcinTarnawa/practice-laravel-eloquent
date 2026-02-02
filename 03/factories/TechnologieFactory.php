<?php

namespace Database\Factories;

use DeepCopy\f013\C;
use App\Models\project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technologie>
 */
class TechnologieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['PHP', 'HTML', 'CSS', 'JS', 'SQL']),
        ];
    }
}
