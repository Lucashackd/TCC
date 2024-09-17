<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'path' => $this->faker->url(),
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,

            'user_id' => User::factory(1)->create()->get(0)->id,
        ];
    }
}
