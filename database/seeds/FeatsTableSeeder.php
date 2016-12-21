<?php

use Illuminate\Database\Seeder;

class FeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'feats' ) -> insert( include( 'featsGeneric.php' ) );
    }
}
