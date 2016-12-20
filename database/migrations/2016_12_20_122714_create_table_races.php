<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->increments('id');
            $table -> string( 'name' );
            $table -> string( 'slug' );
            $table -> string( 'disponibility' );
            $table -> string( 'abilities' );
            $table -> text( 'description' );
            $table -> string( 'holonet' );
            $table -> string( 'wookieepedia' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races');
    }
}
