<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conferences', function (Blueprint $table) {
            $table->increments('ccId');
            $table->string('ccTitle');
            $table->text('ccDetails');
            $table->date('ccStartingDate');
            $table->date('ccEndingDate');
            $table->string('ccCity')->nullable();
            $table->string('ccCountry');
            $table->string('ccEventType')->nullable();
            $table->string('ccContactPerson')->nullable();
            $table->string('ccOrganizer')->nullable();
            $table->string('ccURL');
            $table->tinyInteger('ccFlag');
            $table->string('uEmail');
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
        Schema::drop('Conferences');
    }
}
