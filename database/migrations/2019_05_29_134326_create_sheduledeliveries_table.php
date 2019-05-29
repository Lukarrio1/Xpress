<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheduledeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheduledeliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->string("user_id");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("address");
            $table->string("phone");
            $table->string("express")->default("false");
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
        Schema::dropIfExists('sheduledeliveries');
    }
}
