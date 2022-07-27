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
        Schema::create('mats', function (Blueprint $table) {
                $table->bigIncrements('id')->unsigned();
                $table->bigInteger('id_local_team_in_matchs')->unsigned();
                $table->bigInteger('id_visitor_team_in_matchs')->unsigned();
                $table->bigInteger('goals_local_team')->unsigned();
                $table->bigInteger('goals_visitor_team')->unsigned();
                $table->timestamps();
                $table->foreign('id_local_team_in_matchs')
                        ->references('id')
                        ->on('teams')
                        ->onCascade('delete')
                        ->onUpdate('cascade');
                $table->foreign('id_visitor_team_in_matchs')
                        ->references('id')
                        ->on('teams')
                        ->onCascade('delete')
                        ->onUpdate('cascade');
            });
        }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mats');
    }
};
