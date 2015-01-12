<?php

use Faker\Factory as Faker;

class UniversitiesTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create('en_US');

        foreach (range(1, 4) as $index) {
            $university_wbid       = str_random(16);
            $university_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $university_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $university_updated_at);
            $university_name       = $faker->city;

            University::create([
                'wbid' => $university_wbid,
                'ucas_code' => str_random(4),
                'name' => $university_name . " University",
                'web' => 'http://www.' . strtolower(preg_replace("/[^A-Za-z0-9]/", "", $university_name)) . '.ac.uk',
                'telephone' => '01' . $faker->numerify($string = '#########'),
                'email' => 'info@' . strtolower(preg_replace("/[^A-Za-z0-9]/", "", $university_name)) . '.ac.uk',
                'lat' => $faker->latitude,
                'long' => $faker->longitude,
                'created_at' => $university_created_at,
                'updated_at' => $university_updated_at
            ]);
        }
    }

}