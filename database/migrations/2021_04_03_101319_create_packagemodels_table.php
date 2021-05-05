<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packagemodels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('hotel_id');
            $table->string('location');
            $table->string('map');
            $table->date('date');
            $table->float('price');
            $table->text('description');
            $table->string('facility');
            $table->date('from');
            $table->date('to');
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
        Schema::dropIfExists('packagemodels');
    }
}
