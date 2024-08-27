<?php

namespace Database\Factories;

use App\Models\Jedi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Padwan>
 */
class PadwanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
                  //
                 // the padwan belongs to the Jedi Knight or Master in the one to one has one relationship foreign key needed
                 'jedi_id' => Jedi::factory(),
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
            'image' => fake()->url(),
            'date_joined' => fake()->date(),
            'midi_chlorian_count' => fake()->numberBetween(1000, 27000 ),

        ];
    }
}
