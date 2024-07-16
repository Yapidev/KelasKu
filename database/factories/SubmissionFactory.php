<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Assignment;
use App\Models\Submission;
use App\Models\User;

class SubmissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Submission::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'assignment_id' => Assignment::factory(),
            'student_id' => User::factory(),
            'content' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->randomElement(["not_started","submitted","graded"]),
            'submitted_at' => $this->faker->dateTime(),
        ];
    }
}
