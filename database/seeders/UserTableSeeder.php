<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table("users")->insert([
            "name" => $faker->name(),           
            "age" => $faker->numberBetween(25, 50),
            "gender" => $faker->randomElement(["male", "female", "others"]),
            "email" => $faker->safeEmail,
            "password" => $faker->password()
        ]);
    }
}
