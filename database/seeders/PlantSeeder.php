<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Plant::create([
            'name' => "Kaktus",
            'species' => "Duri Halus",
            'description' => $faker->paragraph(),
            'image' => "kaktus.jpg",
            "price" => $faker->randomFloat(3, 100, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => true,
        ]);
        Plant::create([
            'name' => "Agalonema",
            'species' => "Araceae",
            'description' => $faker->paragraph(),
            'image' => "aglaonema.jpg",
            "price" => $faker->randomFloat(3, 100, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => true,
        ]);
        Plant::create([
            'name' => "Calathea",
            'species' => "Araceae",
            'description' => $faker->paragraph(),
            'image' => "calathea.jpg",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => true,
        ]);
        Plant::create([
            'name' => "Lidah mertua",
            'species' => "Sansevieria Sp.",
            'description' => $faker->paragraph(),
            'image' => "lidahmertua.jpg",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => false,
        ]);
        Plant::create([
            'name' => "monstera",
            'species' => "Araceae",
            'description' => $faker->paragraph(),
            'image' => "monstera.jpg",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => true,
        ]);
        Plant::create([
            'name' => "peacelily",
            'species' => "Spathiphhllum Wallisi",
            'description' => $faker->paragraph(),
            'image' => "peacelily.jpg",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => true,
        ]);
        Plant::create([
            'name' => "philidendron",
            'species' => "Araceae",
            'description' => $faker->paragraph(),
            'image' => "philodendron.jpg",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => false,
        ]);
        Plant::create([
            'name' => "Pothos",
            'species' => "Epipremnum aureum",
            'description' => $faker->paragraph(),
            'image' => "pothos.jpg",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => true,
        ]);
        Plant::create([
            'name' => "Sirih Gading",
            'species' => "Sansevieria Sp.",
            'description' => $faker->paragraph(),
            'image' => "sirihgading.jpg",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => false,
        ]);
        Plant::create([
            'name' => "Spiderplant",
            'species' => "Spathiphhllum Wallisi",
            'description' => $faker->paragraph(),
            'image' => "spiderplant.jpg",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
            "sunlight_requirement" => true,
        ]);
    }
}
