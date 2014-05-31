<?php

use Faker\Factory as Faker;

class MaterialsTableSeeder extends Seeder
{
    public function run()
    {
        $faker      = Faker::create('en_US');
        $allGroups = Group::lists('wbid');
        foreach (range(0, DB::table('groups')->count() - 1) as $index) {
            $group_wbid = $allGroups[$index];
            foreach (range(1, rand(3, 10)) as $index) {
                $material_wbid       = str_random(16);
                $material_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
                $material_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $material_updated_at);
                $material_name       = $faker->city;
                Material::create([
                    'wbid'        => $material_wbid,
                    'group_wbid' => $group_wbid,
                    'name'        => $material_name . ' Material',
                    'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                    'type'        => $faker->randomElement($array = array('pdf', 'ppt', 'doc', 'xls', 'txt')),
                    'created_at'  => $material_created_at,
                    'updated_at'  => $material_updated_at
                ]);
            }
        }
    }
}