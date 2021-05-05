<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutomerBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutomer_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('room_id');
            $table->string('fullname');
            $table->string('address');
            $table->string('checkin');
            $table->string('checkout');
            $table->biginteger('phone');
            $table->string('arrival');
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
        Schema::dropIfExists('cutomer_books');
    }
}
