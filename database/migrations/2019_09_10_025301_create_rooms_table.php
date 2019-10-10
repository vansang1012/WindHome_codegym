<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('address');
            $table->integer('pricePerMonth');
            $table->integer('minRentTime');
            $table->boolean('bathRoom');
            $table->double('area');
            $table->smallInteger('guest');
            $table->boolean('parking');
            $table->boolean('wifi');
            $table->boolean('cooking');
            $table->boolean('airCondition');
            $table->boolean('status');
            $table->double('lat');
            $table->double('lng');


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
