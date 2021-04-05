<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('boats', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->text('name_of_the_city');
            $table->text('street');

            $table->text('boat_type');
            $table->text('boat_manufacturer');
            $table->text('colour_of_boat');

            $table->integer('rooms');
            $table->text('survivability');

            $table->integer('ac');
            $table->integer('heating');
            $table->integer('gps');
            $table->integer('washing_machine');

            $table->integer('boat_cost_of_renting');
            $table->integer('boat_deposit');
            $table->string('boat_image');

            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boats');
    }
}
