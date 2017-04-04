<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('team_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('position');
            $table->timestamps();
        });

        // Add the team_id foreign key
        // which references the teams.id column
        Schema::table('players', function (Blueprint $table) {
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('players', function(Blueprint $table) {
            $table->dropForeign('players_team_id_foreign');
        }); 
        
        Schema::drop('players');
    }
}
