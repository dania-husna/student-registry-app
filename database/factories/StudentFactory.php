<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'staff_id' => Staff::factory(),
            'stud_name' => $this->faker->name(),
            'stud_email' => $this->faker->email(),
            'stud_address' => $this->faker->address(),
            'stud_course' => $this->faker->numerify('CS###'),
        ];
    }
}
