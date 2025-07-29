<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\Maker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $modelPrefix = fake()->randomElement(['X', 'GT', 'S', 'LX', 'EX', 'GL', 'Z', 'R']);
        $modelSuffix = fake()->randomNumber(3) + 1;

        return [
            'name' => $modelPrefix . $modelSuffix,
            'maker_id' => Maker::inRandomOrder()->first()?->id ?? Maker::factory(),
            'car_type_id' => CarType::inRandomOrder()->first()?->id ?? CarType::factory(),
        ];
    }
}
