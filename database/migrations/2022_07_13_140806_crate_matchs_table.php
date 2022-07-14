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
            $table->bigInteger('local_team_id')->unsigned();
            $table->bigInteger('visitor_team_id')->unsigned();
            $table->timestamps();
            $table->foreign('local_team_id')
                    ->references('id')
                    ->on('teams')
                    ->onCascade('delete');
            $table->foreign('visitor_team_id')
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
        //
    }
};
