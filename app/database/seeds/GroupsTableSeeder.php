<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GroupsTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create('en_US');

        foreach (range(1, 20) as $index) {
            $group_wbid  = str_random(16);
            $group_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $group_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $group_updated_at);
            $group_name = $faker->city;

            Group::create([
                'wbid'      => $group_wbid,
                'name'       => $group_name,
                'created_at' => $group_created_at,
                'updated_at' => $group_updated_at
            ]);
        }
	}

}