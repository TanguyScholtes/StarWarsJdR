<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this -> call( RacesTableSeeder::class );
        $this -> call( AbilitiesTableSeeder::class );
        $this -> call( SkillsTableSeeder::class );
    }
}
