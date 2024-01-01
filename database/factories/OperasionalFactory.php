<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operasional>
 */
class OperasionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            'category_id' => $this->faker->randomElement([1,2,3]),
            'statusDokumen_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'latitude' => $this->faker->latitude(),
            'longtitude' => $this->faker->longitude(),
            'lokasi' => $this->faker->address(),
        ];
    }
}
