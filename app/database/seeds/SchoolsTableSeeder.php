<?php

use Faker\Factory as Faker;

class SchoolsTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create('en_US');

        $allUniversities = University::lists('wbid');
        foreach (range(0, DB::table('universities')->count() - 1) as $index) {

            $university_wbid = $allUniversities[$index];
            foreach (range(1, rand(2, 6)) as $index) {
                $school_wbid  = str_random(16);
                $school_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
                $school_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $school_updated_at);
                $school_name = $faker->city;
                //echo "Album #: " . $index . " - Artist MDBID: " . $university_wbid . "Album MDBID: " . $album_mdbid . "\r\n";
                School::create([
                    'wbid'      => $school_wbid,
                    'university_wbid' => $university_wbid,
                    'name'       => $school_name,
                    'created_at' => $school_created_at,
                    'updated_at' => $school_updated_at
                ]);
            }
        }
	}

}