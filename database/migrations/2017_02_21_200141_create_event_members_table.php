<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('e_id');
            $table->integer('m_id');
            $table->timestamps();
        });

        Schema::table('event_members', function(Blueprint $table) {
            $table->foreign('e_id')->references('e_id')->on('events');
            $table->foreign('m_id')->references('m_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_members');
    }
}
