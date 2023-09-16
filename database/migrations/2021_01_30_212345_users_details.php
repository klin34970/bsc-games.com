<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_details', function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id');
            $table->string('firstname', 32)->nullable();
            $table->string('lastname', 32)->nullable();
            $table->string('phone', 16)->nullable();

            $table->string('telegram_id', 64)->nullable()->unique();
            $table->string('wallet_id', 64)->nullable()->unique();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('users_details');
    }
}
