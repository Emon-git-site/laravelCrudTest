<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Class names from 'one' to 'ten'
        $classNames = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];

        for ($i = 1; $i <= 500; $i++) {
            Student::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->numberBetween(10000000000, 99999999999),
                'address' => $faker->address,
                'class' => $faker->randomElement($classNames),
            ]);
        }
    }
}
