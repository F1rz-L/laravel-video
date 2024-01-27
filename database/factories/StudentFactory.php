<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo' => fake()->image('public/uploads/',720,340,null,false),
            'name' => fake()->name('male'),
            'email' => fake()->safeEmail(),
            'role' => fake()->word(),
            'desc' => fake()->title(),
            'status' => fake()->randomDigit(),
        ];
    }
}
