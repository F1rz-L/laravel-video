<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 995; $i++) {
            $faker = Factory::create();
            $obj = new Student;
            $obj->student_name = $faker->name();
            $obj->save();
        }
    }
}
