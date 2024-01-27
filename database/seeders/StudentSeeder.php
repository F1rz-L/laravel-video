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
        for ($i = 0; $i < 30; $i += 1) {
            $faker = Factory::create();
            $obj = new Student;
            $obj->name = $faker->name();
            $obj->email = $faker->email();
            $obj->role = $faker->word();
            $obj->desc = "kosong";
            $obj->save();
        }
    }
}
