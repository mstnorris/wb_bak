<?php

use Faker\Factory as Faker;

class ModulesTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create('en_US');

        foreach (range(1, 20) as $index) {
            $module_wbid  = str_random(16);
            $module_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $module_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $module_updated_at);
            $module_name = $faker->city;

            Module::create([
                'wbid'      => $module_wbid,
                'name'       => $module_name,
                'created_at' => $module_created_at,
                'updated_at' => $module_updated_at
            ]);
        }
	}

}