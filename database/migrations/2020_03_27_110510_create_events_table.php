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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('describe');
            $table->string('location');
            $table->string('image');
            $table->string('time');
            $table->string('price');
            $table->string('type')->default('upcoming ');
            $table->string('status')->default('hidden');
            $table->integer('show')->default(0);
            $table->string('meta_keywords')->nullable();
            $table->string('meta_describe')->nullable();
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
        Schema::dropIfExists('events');
    }
}
