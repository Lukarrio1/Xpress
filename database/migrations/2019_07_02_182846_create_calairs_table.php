<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calairs', function (Blueprint $table) {
            $table->increments('id');
            $table->float('exrate')->default(0);
            $table->float('w1lb')->default(3.00);
            $table->float('w2lb')->default(6.00);
            $table->float('w3lb')->default(9.00);
            $table->float('w4lb')->default(12.00);
            $table->float('w5lb')->default(13.50);
            $table->float('w6lb')->default(16.00);
            $table->float('w7lb')->default(19.00);
            $table->float('w8lb')->default(22.00);
            $table->float('w9lb')->default(25.50);
            $table->float('w10lb')->default(26.00);
            $table->float('w11lbup')->default(2.25);
            $table->float('w21lbup')->default(2.35);
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
        Schema::dropIfExists('calairs');
    }
}
