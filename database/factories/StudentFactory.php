<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        $grade_id = fake()->numberBetween(1, 35);

        return [
            'name' => $this->faker->name,
            'grade_id' => $grade_id,
            'department_id' => function () use ($grade_id) {
                $grade = Grade::find($grade_id);

                if ($grade) {
                    if (str_contains($grade->name, 'PPLG')) {
                        return Department::where('department', 'PPLG')->first()->id;
                    } elseif (str_contains($grade->name, 'Animasi 3D')) {
                        return Department::where('department', 'ANIMASI 3D')->first()->id;
                    } elseif (str_contains($grade->name, 'Animasi 2D')) {
                        return Department::where('department', 'ANIMASI 2D')->first()->id;
                    } elseif (str_contains($grade->name, 'DKV TG')) {
                        return Department::where('department', 'DKV TG')->first()->id;
                    } elseif (str_contains($grade->name, 'DKV DG')) {
                        return Department::where('department', 'DKV DG')->first()->id;
                    }
                }

                // Default fallback if no matching department is found
                return Department::inRandomOrder()->first()->id;
            },
            'descipsi' => fake()->numberBetween(1, 5),
            'email' => fake()->unique()->safeEmail(),
            'alamat' => fake()->address(),
        ];
    }
}
