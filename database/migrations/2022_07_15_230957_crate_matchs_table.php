<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_local_team_in_matchs')->unsigned();
            $table->bigInteger('id_visitor_team_in_matchs')->unsigned();
            $table->timestamps();
            $table->foreign('id_local_team_in_matchs')
                    ->references('id')
                    ->on('teams')
                    ->onCascade('delete');
            $table->foreign('id_visitor_team_in_matchs')
                    ->references('id')
                    ->on('teams')
                    ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchs');
    }
};
