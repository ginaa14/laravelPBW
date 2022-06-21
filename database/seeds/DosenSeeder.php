<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 10; $i++)
        {
            DB::table('72200372')->insert([
                'nidn' => $faker->nik(),
                'nama' => $faker->name(),
                'status' => $faker->suffix(),
                'jafung' => $faker->title(),
                'pakar' => $faker->jobTitle()
            ]);
        }
    }
}
