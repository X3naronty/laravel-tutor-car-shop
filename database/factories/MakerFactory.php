<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maker>
 */
class MakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vendors = [
            'Toyota', 'Honda', 'Ford', 'Chevrolet', 'Nissan',
            'BMW', 'Mercedes-Benz', 'Audi', 'Volkswagen', 'Kia',
            'Hyundai', 'Subaru', 'Mazda', 'Lexus', 'Jeep',
            'Volvo', 'Porsche', 'Jaguar', 'Ferrari', 'Lamborghini'
        ];

        return [
            'name' => fake()->randomElement($vendors),
        ];
    }
}
