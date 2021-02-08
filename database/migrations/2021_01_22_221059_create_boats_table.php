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

            #region type of the boat
            $table->text('where_can_u_get_it');
            $table->text('boat_type');
            #endregion

            #region exterior
            $table->text('colour_of_boat');
            #endregion

            #region interior
            $table->text('boat_manufacturer');
            // $table->text('type_of_gearbox');
            $table->boolean('air_condition');
            #endregion

            #region  image && cost && deposit
            $table->string('boat_image');
            $table->double('boat_cost_of_renting');
            $table->double('boat_deposit');
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
        Schema::dropIfExists('boats');
    }
}
