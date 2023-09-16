<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FrontForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_form', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->string('email', 128);
            $table->string('subject', 64);
            $table->text('message');
            $table->string('status', 16);
            $table->string('category', 16);
            $table->string('ip', 15);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_form');
    }
}
