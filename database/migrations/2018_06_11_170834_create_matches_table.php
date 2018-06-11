<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('matches', function (Blueprint $table) {
      $table->unsignedSmallInteger('id');
      $table->unsignedSmallInteger('team_h')->nullable();
      $table->unsignedSmallInteger('team_a')->nullable();
      $table->dateTime('date')->nullable();
      $table->unsignedSmallInteger('stadium_id')->nullable();
      $table->string('type',10)->nullable();
      $table->unsignedSmallInteger('score_h')->nullable();
      $table->unsignedSmallInteger('score_a')->nullable();
      $table->unsignedSmallInteger('pen_h')->nullable();        // for knowout matches
      $table->unsignedSmallInteger('pen_a')->nullable();        // for knowout matches
      $table->unsignedSmallInteger('group_id')->nullable();     // for group matches

      $table->unsignedSmallInteger('knockout_id')->nullable();
      $table->string('team_h_description')->nullable();
      $table->string('team_a_description')->nullable();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('matches');
  }
}
