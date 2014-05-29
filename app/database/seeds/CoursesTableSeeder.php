<?php

use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create('en_US');

        foreach (range(1, 20) as $index) {
            $course_wbid  = str_random(16);
            $course_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $course_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $course_updated_at);
            $course_name = $faker->city;

            Course::create([
                'wbid'      => $course_wbid,
                'name'       => $course_name,
                'created_at' => $course_created_at,
                'updated_at' => $course_updated_at
            ]);
        }
	}

}