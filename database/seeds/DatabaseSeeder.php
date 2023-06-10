<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('en_US');

       for($i = 1; $i < 100; $i++)

       {
        DB::table('mhs')->insert([
            'nim' => $faker->randomNumber(6, true),
            'nama' => $faker->name(),
            'gender' => $faker->lexify(),
            'prodi' => $faker->sentence(1),
            'hobi' => $faker->sentence(2),
        ]);
       }

        
    }
}
