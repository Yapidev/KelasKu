<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Grade;
use App\Models\Submission;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'submission_id' => Submission::factory(),
            'grade' => $this->faker->randomNumber(),
            'comments' => $this->faker->text(),
        ];
    }
}
