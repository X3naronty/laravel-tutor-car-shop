<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $carTypes = require database_path('seeders/data/car_types.php');
        $carTypesCount = count($carTypes);
        CarType::factory()
            ->sequence(...$carTypes)->count($carTypesCount)->create();

        $fuelTypes = require database_path('seeders/data/fuel_types.php');
        $fuelTypesCount = count($fuelTypes);
        FuelType::factory()->sequence(...$fuelTypes)->count($fuelTypesCount)->create();

        $statesWithCities = require database_path('seeders/data/states_with_cities.php');
        foreach ($statesWithCities as $stateName => $cities) {
            $citiesCount = count($cities);
            State::factory()->has(City::factory()->count($citiesCount)->sequence(...array_map(fn($city) => ['name' => $city], $cities)))->create(['name' => $stateName]);
        }

        $makersWithModels = require database_path('seeders/data/makers_with_models.php');
        foreach ($makersWithModels as $makerName => $models) {
            $modelsCount = count($models);
            Maker::factory()->has(Model::factory()->count($modelsCount)->sequence(...array_map(fn($model) => ['name' => $model], $models)))->create(['name' => $makerName]);
        }

        User::factory()->count(3)->create();
        User::factory()->count(2)->has(
            Car::factory()->count(50)->has(
                CarImage::factory()->count(5)->sequence(
                    ['position' => 1],
                    ['position' => 2],
                    ['position' => 3],
                    ['position' => 4],
                    ['position' => 5],
                )
            )
            ->hasFeatures(),
            'favouriteCars'
        )->create();
    }
}
