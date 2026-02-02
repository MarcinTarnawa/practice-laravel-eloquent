<?php

namespace Database\Factories;

use App\Models\Project;
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
        $techNames = ['PHP', 'HTML', 'CSS', 'JS', 'SQL'];

        return [
            'project_id' => Project::factory(),
            'name' => $techNames[array_rand($techNames)],
        ];
    }
}
