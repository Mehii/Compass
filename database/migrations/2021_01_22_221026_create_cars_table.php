<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            #region type of the car
            $table->text('name_of_the_city');//
            $table->text('type_of_it');
            #endregion

            #region interior
            $table->text('car_manufacturer');//
            $table->text('type_of_gearbox');//
            $table->text('colour_of_car');
            #endregion

            #region exterior
            $table->integer('number_of_doors');
            $table->integer('automatic_windows');
            #endregion
            $table->integer('alarm');
            $table->integer('bluetooth');
            $table->integer('dashcam');
            $table->integer('back_radar');
            $table->integer('air_condition');
            $table->integer('abs');

            #region  image && cost && deposit
            $table->integer('car_cost_of_renting');
            $table->integer('car_deposit');
            $table->string('car_image');
            #endregion

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
        Schema::dropIfExists('cars');
    }
}
