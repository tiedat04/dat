<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mf>
 */
class MfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $ten=['Pagani','Bugatti','Mercedes-Benz','Koenigsegg','Lamborghini','Aston Martin','McLaren','Ferrari','Zenvo','Maserati'];
        return [
            'mf_name' => fake()->unique()->randomElement($ten),
        ];
    }
}
