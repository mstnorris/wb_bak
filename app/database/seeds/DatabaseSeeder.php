<?php

class DatabaseSeeder extends Seeder {

    /**
     * @var array
     */
    private $tables = array(
        'users',
        'universities',
        'schools',
        'courses',
        'modules',
        'groups'
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->cleanDatabase();

        $this->call('UsersTableSeeder');
        $this->call('UniversitiesTableSeeder');
        $this->call('SchoolsTableSeeder');
        $this->call('CoursesTableSeeder');
        $this->call('ModulesTableSeeder');
        $this->call('GroupsTableSeeder');


    }

    public function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
