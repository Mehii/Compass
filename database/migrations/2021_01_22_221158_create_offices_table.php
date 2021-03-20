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
            $table->text('street');
//          $table->text('type_of_property');
//          $table->text('geographical_coordinate');
            #endregion

          #region details of the office
            $table->integer('square_meter');
            $table->integer('building_floor');
            $table->integer('floor');
            $table->text('furniture');
            #endregion

            #region rooms
           $table->integer('bathroom');
           $table->integer('bedroom');
           $table->integer('dining_room');
           $table->integer('kitchen');
           $table->integer('living_room');
           $table->integer('toilet');
           $table->integer('garage');
           #endregion

            #region extras
           $table->integer('lift');
           $table->integer('ac');
           $table->integer('washing_machine');
           $table->integer('sea_view');
           $table->integer('heating');
           #endregion

           #region  image && cost && deposit

           $table->double('office_cost_of_renting');
           $table->double('office_deposit');
           $table->string('office_image');
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
