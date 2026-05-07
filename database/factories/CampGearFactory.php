<?php

namespace Database\Factories;

use App\Models\CampGear;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CampGear>
 */
class CampGearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [];
        // return [
        //     'name' => $this->faker->name(),
        //     'category' => $this->faker->word(),
        //     'description' => $this->image(),
        //     'price' => $this->faker->randomFloat(2, 100, 1000),
        //     'stock' => $this->faker->numberBetween(0, 100),
        // ];
    }

    // public function image(): string
    // {
    //     $files = array_diff(scandir(public_path('images/camp-gear')), ['.', '..']);
    //     return $this->faker->randomElement($files);
    // }
}
