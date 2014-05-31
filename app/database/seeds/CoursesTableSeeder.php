<?php

use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create('en_US');
        $allSchools = School::lists('wbid');
        foreach (range(0, DB::table('schools')->count() - 1) as $index) {
            $school_wbid = $allSchools[$index];
            foreach (range(1, rand(1, 10)) as $index) {
                $course_wbid  = str_random(16);
                $course_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
                $course_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $course_updated_at);
                $course_name = $faker->city;
                Course::create([
                    'wbid'      => $course_wbid,
                    'school_wbid' => $school_wbid,
                    'name'       => $course_name . ' Course',
                    'created_at' => $course_created_at,
                    'updated_at' => $course_updated_at
                ]);
            }
        }
	}

}