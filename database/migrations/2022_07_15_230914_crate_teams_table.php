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
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_club_in_teams')->unsigned();
            $table->string('name_team');
            $table->timestamps();
            $table->foreign('id_club_in_teams')
                    ->references('id')
                    ->on('clubs')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations. 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
