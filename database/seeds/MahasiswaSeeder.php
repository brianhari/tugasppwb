<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
             'jurusan' => $faker->sentence(1),
             'bidang_minat' => $faker->sentence(2),
         ]);
        }
    }
}
