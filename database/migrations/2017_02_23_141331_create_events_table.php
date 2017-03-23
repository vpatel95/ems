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
            $table->integer('id')->primary();
            $table->string('name');
            $table->string('type');
            $table->string('sub_type');
            $table->integer('c_id');
            $table->integer('h_id');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
            $table->timestamps();
        });

        Schema::table('events', function(Blueprint $table) {
            $table->foreign('c_id')->references('c_id')->on('coordinators');
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
