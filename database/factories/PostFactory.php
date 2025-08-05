<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
            'user_id' => 1, // Assuming user with ID 1 exists
            // 'user_id' => User::Factory(), // Using factory to create a user
            'title' => $this->faker->sentence,
            'short_content' => $this->faker->text(50),
            'content' => $this->faker->paragraph(15)
        ];
    }
}
