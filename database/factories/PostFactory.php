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
            'category_id' => rand(1, 5), // Assuming categories with IDs 1 to 5 exist
            // 'user_id' => User::Factory(), // Using factory to create a user
            'title' => $this->faker->sentence,
            'short_content' => $this->faker->text(50),
            'content' => $this->faker->paragraph(15)
        ];
    }
}
