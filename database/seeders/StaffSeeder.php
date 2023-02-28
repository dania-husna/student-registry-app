<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use App\Models\Student;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Staff::factory()
            ->count(5)
            ->hasStudents(10)
            ->create();

        Staff::factory()
            ->count(5)
            ->create();
    }
}
