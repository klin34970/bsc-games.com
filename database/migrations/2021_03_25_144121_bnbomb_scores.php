<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BnbombScores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('bnbomb')->create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('chain_id');
            $table->string('wallet_id');
            $table->string('trx_id');
            $table->tinyInteger('round')->unsigned();
            $table->tinyInteger('score')->unsigned();
            $table->timestamp('round_start', 6);
            $table->timestamp('round_end', 6);
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
        Schema::connection('bnbomb')->dropIfExists('scores');
    }
}
