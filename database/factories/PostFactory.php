<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'userId' => $this->faker->numberBetween(1, 10),
            'categoryId' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->text(100),
            'upVotes' => $this->faker->numberBetween(1, 10),
            'downVotes' => $this->faker->numberBetween(1, 10),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
