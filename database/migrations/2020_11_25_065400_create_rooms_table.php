<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hotel_id');
            $table->string('type');
            $table->string('roomname');
            $table->string('image');
            $table->text('description');
            $table->string('size');
            $table->integer('day');
            $table->string('bed');
            $table->double('price');
            $table->bigInteger('children');
            $table->bigInteger('adult');
            $table->double("extra_children");
            $table->double("extra_adult");
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
        Schema::dropIfExists('rooms');
    }
}
