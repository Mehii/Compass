<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            #region geographical details
            $table->text('name_of_the_city');
   //         $table->text('geographical_coordinate');
            #endregion

            #region details of the office
            $table->text('furniture'); //no,half,full
            $table->integer('building_floor');//10
            $table->integer('floor');//4
            $table->integer('number_of_rooms');//2
            $table->double('square_meter');//64.3
            #endregion

            #region  image && cost && deposit
            $table->string('office_image');
            $table->double('office_cost_of_renting');
            $table->double('office_deposit');
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
        Schema::dropIfExists('offices');
    }
}
