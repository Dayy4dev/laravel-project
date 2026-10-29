<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                '11 PPLG 1', '11 PPLG 2', '11 PPLG 3', 
                '11 ANIMASI 1', '11 ANIMASI 2', '11 DKV 1', '11 DKV 2',
                '12 PPLG 1', '12 PPLG 2', '12 PPLG 3', 
                '12 ANIMASI 1', '12 ANIMASI 2', '12 DKV 1', '12 DKV 2',
            ]),
            'major' => fake()->randomElement(['PPLG', 'ANIMASI', 'DKV']),
        ];
    }
}
