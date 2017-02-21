<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->integer('e_id')->primary();
            $table->string('name');
            $table->string('type');
            $table->string('sub_type');
            $table->integer('c_id');
            $table->integer('h_id');
            $table->string('location');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });

        Schema::table('events', function(Blueprint $table) {
            $table->foreign('c_id')->references('m_id')->on('users');
            $table->foreign('h_id')->references('h_id')->on('hods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
