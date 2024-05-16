<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->asciify('user-****'),
            'model' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'produced_on' => now(),
            'image' => 'hinhanh' .rand(1,10).'.jpg',
            'mf_id' =>rand(1,10)
        ];
    }
}