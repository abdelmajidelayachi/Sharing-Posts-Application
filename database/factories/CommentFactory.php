<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'postId' => $this->faker->numberBetween(1, 10),
            'userWhiterId' => $this->faker->numberBetween(1, 10),
            'message' => $this->faker->text(200)
        ];
    }
}
