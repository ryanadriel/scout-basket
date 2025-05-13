<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Player>
 */
class PlayerFactory extends Factory
{

    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'position' => fake()->randomElement(['QB', 'RB', 'WR', 'TE']),
            'number' => fake()->randomNumber(2),
            'height' => fake()->randomFloat(2, 5, 8),
            'weight' => fake()->randomFloat(2, 100, 200),
            'age' => fake()->numberBetween(18, 40),
            'points' => fake()->randomNumber(2),
        ];
    }
}
