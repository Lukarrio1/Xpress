<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrealertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prealerts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token')->default('true');
            $table->string('vender');
            $table->string("name");
            $table->string('xl');
            $table->string('email');
            $table->string('tracking');
            $table->string('courier');
            $table->string('pkgname');
            $table->string('description');
            $table->string('value');
            $table->string('weight');
            $table->string('invoice');
            $table->string('user_id');
            $table->string('expected_date');
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
        Schema::dropIfExists('prealerts');
    }
}
