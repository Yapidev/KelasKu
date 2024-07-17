<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Assignment;
use App\Models\Classroom;

class AssignmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Assignment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'classroom_id' => Classroom::factory(),
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'due_date' => $this->faker->dateTime(),
        ];
    }
}
