<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'sex' => $this->faker->randomElement(['Male', 'Female']),
            'phone' => $this->faker->phoneNumber,
            'section' => $this->faker->word,
            'content' => $this->faker->paragraph,
            'status' => $this->faker->boolean,
            'age' => $this->faker->numberBetween(18, 65),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}
