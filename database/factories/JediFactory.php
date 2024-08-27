<?php

namespace Database\Factories;

use App\Models\Jedi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jedi>
 */
class JediFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'age' => fake()->numberBetween(0,1000),
            'race' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female', 'transgender', 'hermaphrodite']),
            'fighting_style' => fake()->randomElement([
                'Form I: Shii-Cho',
                'Form II: Makashi:',
                'Form III: Soresu',
                'Form IV: Ataru',
                'Form V: Djem So ',
                'Form V: Shien',
                'Form VI: Niman',
                'Form VII: Vaapad',
                'Form VII: Juyo',
            ]),
            'rank' => fake()->randomElement(['Jedi Knight', 'Master', 'Grand Master']),
            'image' => fake()->url(),
            'date_joined' => fake()->date(),
            'midi_chlorian_count' => fake()->numberBetween(1000, 27000 ),
        ];
    }
}
