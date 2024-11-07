<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'grade_id' => fake()->numberBetween(1, 35),
            'department_id' => fake()->numberBetween(1, 5),
            'descipsi' => fake()->numberBetween(1,5),
            'email' => fake()->unique()->safeEmail(),
            'alamat' => fake()->address(),
        ];
    }
}

