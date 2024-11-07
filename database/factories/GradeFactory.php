<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['12 PPLG 2', '12 PPLG 1', '11 PPLG 2', '11 PPLG 1', '10 PPLG 1', '10 PPLG 2', '12 ANIMASI 2D', '12 ANIMASI 3D', '11 ANIMASI 2D', '11 ANIMASI 3D', '10 ANIMASI 2D', '10 ANIMASI 3D', '12 DKV DG','11 DKV DG','10 DKV DG', '12 DKV TG',]),
            'department_id' => fake()->numberBetween(1,4),
        ];
    }
}
