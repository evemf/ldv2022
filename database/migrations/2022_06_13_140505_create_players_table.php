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
            $table->id()->unsigned()->unique();
            $table->string('nom');
            $table->string('cognoms');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('ciutat');
            $table->smallInteger('equip_id');
            $table->smallInteger('categoria_id');
        });

        
        Schema::table('players', function($table) {
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
