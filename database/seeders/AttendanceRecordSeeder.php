<?php

namespace Database\Seeders;

use App\Models\AttendanceRecord;
use Illuminate\Database\Seeder;

class AttendanceRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttendanceRecord::factory()->count(5)->create();
    }
}
