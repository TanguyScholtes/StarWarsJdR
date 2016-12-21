<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type');
            $table->string('desc');
            $table->float('basePV', 8, 2); //float value of 8 digits and 2 after decimal point
            $table->float('baseForce', 8, 2)->nullable();
            $table->string('featsFrequency');
            $table->float('skillsModifier', 8, 2);
            $table->string('powersModifier');
            $table->float('baseBBA', 8, 2);
            $table->float('baseToughness', 8, 2);
            $table->float('baseReflexes', 8, 2);
            $table->float('baseWill', 8, 2);
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
        Schema::dropIfExists('jobs');
    }
}
