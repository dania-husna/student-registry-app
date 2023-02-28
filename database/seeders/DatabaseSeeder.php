<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Staff;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        $this->call([
            StaffSeeder::class,
            StudentSeeder::class
        ]);

        /*DB::table('staff')->insert([
            'staff_name' => Str::random(10),
            'staff_email' => Str::random(10).'@gmail.com',
            'staff_password' => Hash::make('staff_password'),
        ]);

        DB::table('students')->insert([
            'stud_name' => Str::random(10),
            'stud_email' => Str::random(10).'@gmail.com',
            'stud_address' => Str::random(20),
            'stud_course' => Str::random(5),
        ]);*/
    }
}
