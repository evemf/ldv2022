<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('cognoms');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('ciutat');
            $table->unsignedBigInteger('equip_id');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('equip_id')->references('id')->on('teams');
            $table->foreign('categoria_id')->references('id')->on('categories');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
