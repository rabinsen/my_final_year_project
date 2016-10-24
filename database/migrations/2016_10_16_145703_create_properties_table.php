<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('title');
            $table->float('price');
            $table->string('type');
            $table->string('status');
            $table->string('address');
            $table->string('readyToMove');
            $table->string('city');
            $table->string('country');

            $table->string('mapLocation');
            $table->integer('user_id')->unsigned();
            $table->float('landArea');
            $table->float('houseArea');
            $table->string('plotted');
            $table->integer('storey');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('kitchen');
            $table->float('roadDistance');
            $table->text('description');
//            $table->string('image');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
