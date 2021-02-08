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
            $table->text('where_can_u_get_it');
            #endregion

            #region exterior
            $table->text('colour_of_car');
            $table->integer('number_of_doors');
            $table->boolean('automatic_windows');
            #endregion

            #region interior
            $table->text('car_manufacturer');
            $table->text('type_of_gearbox');
            $table->boolean('air_condition');
            $table->boolean('abs');
            #endregion

            #region  image && cost && deposit
            $table->string('car_image');
            $table->double('car_cost_of_renting');
            $table->double('car_deposit');
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
