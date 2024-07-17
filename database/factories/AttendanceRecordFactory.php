<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attendance;
use App\Models\AttendanceRecord;
use App\Models\User;

class AttendanceRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AttendanceRecord::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'attendance_id' => Attendance::factory(),
            'student_id' => User::factory(),
            'status' => $this->faker->randomElement(["present","absent"]),
        ];
    }
}
