<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
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
            'year' => fake()->year(),
            'price' => (int)fake()->randomFloat(2, 5, 100) * 1000,
            'vin' => strtoupper(Str::random(17)),
            'mileage' => (int)fake()->randomFloat(2, 5, 500) * 10000,

            'model_id' => Model::inRandomOrder()->first()?->id ?? Model::factory(),
            'fuel_type_id' => FuelType::inRandomOrder()->first()?->id ?? FuelType::factory(),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'city_id' => City::inRandomOrder()->first()?->id ?? City::factory(),

            'description' => fake()->text(1000),
            'published_at' => fake()->dateTimeBetween('-1 month', '+1 day'),
        ];
    }
}
