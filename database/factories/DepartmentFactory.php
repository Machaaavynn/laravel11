<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition(): array
    {
        return [
            'department' => $this->faker->randomElement(['PPLG', 'ANIMASI 2D', 'ANIMASI 3D', 'DKV DG', 'DKV TG']),
            'descipsi' => $this->faker->randomElement(['MEMBUAT WEBSITE', 'ANIMASI CHARACTER 2D', 'ANIMASI CHARACTER 3D', 'DKV UI/UX DG', 'DKV MEMBUAT BAJU TG']),
        ];
    }
}
