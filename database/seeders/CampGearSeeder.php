<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\CampGear;

class CampGearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        CampGear::create([
            'name' => "Kompor",
            'category' => "Alat makan",
            'description' => $faker->sentence(),
            'image' => "kompor-camping.png",
            "price" => $faker->randomFloat(3, 100, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Kursi Lipat",
            'category' => "furnitur lipat",
            'description' => $faker->sentence(),
            'image' => "kursi-lipat-camping.png",
            "price" => $faker->randomFloat(3, 100, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Matras",
            'category' => "alat tidur",
            'description' => $faker->sentence(),
            'image' => "matras-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Sleeping Bag",
            'category' => "alat tidur",
            'description' => $faker->sentence(),
            'image' => "sleeping-bag-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Tas Carier",
            'category' => "alat tidur",
            'description' => $faker->sentence(),
            'image' => "tas-carrier-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Tenda Besar",
            'category' => "alat tidur",
            'description' => $faker->sentence(),
            'image' => "tenda-besar-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Tenda kecil",
            'category' => "alat tidur",
            'description' => $faker->sentence(),
            'image' => "tenda-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Tracking Pole",
            'category' => "alat mendaki",
            'description' => $faker->sentence(),
            'image' => "tracking-pole-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "tabung Gas",
            'category' => "alat masak",
            'description' => $faker->sentence(),
            'image' => "tabung-gas-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Head Lamp",
            'category' => "alat mendaki",
            'description' => $faker->sentence(),
            'image' => "head-lamp-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Lampu Tenda",
            'category' => "alat mendaki",
            'description' => $faker->sentence(),
            'image' => "lampu-tenda-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
        CampGear::create([
            'name' => "Hammock",
            'category' => "alat mendaki",
            'description' => $faker->sentence(),
            'image' => "hammock-camping.png",
            "price" => $faker->randomFloat(3, 300, 1000),
            "stock" => $faker->numberBetween(10, 100),
        ]);
    }
}
