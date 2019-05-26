<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token')->nullable(); 
            $table->string('telephone');
            $table->string('city');
            $table->string('login_modal')->nullable();
            $table->string('parish');
            $table->string('Country');
            $table->string('address');
            $table->string('userimage')->default('noimage.jpg');
            $table->integer('trn');
            $table->rememberToken();
            $table->string('xl')->nullable();
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
        Schema::dropIfExists('users');
    }
}
