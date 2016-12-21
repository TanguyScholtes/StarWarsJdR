<?php

use Illuminate\Database\Seeder;

class JobsSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'jobs_skills' ) -> insert( include( 'classes-skills.php' ) );
    }
}
