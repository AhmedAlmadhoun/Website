<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'id_number' => $this->faker->unique()->randomNumber(8),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'address' => $this->faker->address,
            'created_at' => now(),
            'gender' => $this->faker->randomElement(['Male','Female']),
            'date_of_birth' => $this->faker->date('Y-m-d', 'now'),
            'degree_id' => $this->faker->numberBetween(1, 5),
            'course_id' => $this->faker->numberBetween(1, 5),
            'coach_id' => $this->faker->numberBetween(1, 5),
            



        ];
    }
}
