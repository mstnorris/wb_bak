<?php

use Faker\Factory as Faker;

class SchoolsTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create('en_US');

        foreach (range(1, 20) as $index) {
            $school_wbid  = str_random(16);
            $school_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $school_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $school_updated_at);
            $school_name = $faker->city;

            School::create([
                'wbid'      => $school_wbid,
                'name'       => $school_name,
                'created_at' => $school_created_at,
                'updated_at' => $school_updated_at
            ]);
        }
	}

}