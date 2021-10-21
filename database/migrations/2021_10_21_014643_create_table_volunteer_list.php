<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVolunteerList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_list', function (Blueprint $table) {
            $table->increments('volunteer_id');
            $table->integer('sex_id')->nullable();
            $table->integer('region_id')->nullable();
            $table->string('first_name', 250)->nullable();
            $table->string('last_name', 250)->nullable();
            $table->integer('age')->nullable();
            $table->dateTime('birth_date')->nullable();
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
        Schema::dropIfExists('volunteer_list');
    }
}
