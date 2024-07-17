<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TopicSeeder::class,
            ClassroomSeeder::class,
            AssignmentSeeder::class,
            SubmissionSeeder::class,
            GradeSeeder::class,
            AttendanceSeeder::class,
            AttendanceRecordSeeder::class,
            DiscussionSeeder::class,
            NotificationSeeder::class,
        ]);
    }
}
