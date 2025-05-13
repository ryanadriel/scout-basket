<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Game>
 */
class GameFactory extends Factory
{
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'opponent' => $this->faker->company,
            'scheduled_at' => $this->faker->dateTimeBetween('now', '+1 year'),
            'location' => $this->faker->randomElement([Game::LOCATION_HOME, Game::LOCATION_AWAY]),
            'venue' => $this->faker->optional(0.7)->word, // 70% chance de ter um venue
            'result' => $this->faker->optional(0.3)->regexify('[0-9]{1}-[0-9]{1}'), // 30% chance de ter um resultado
            'is_finished' => $this->faker->boolean(20), // 20% chance de estar finalizado
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
