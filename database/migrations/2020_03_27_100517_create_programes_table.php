<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->string('name');
            $table->text('describe');
            $table->string('image')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_describe')->nullable();
            $table->integer('status')->default(0);
            $table->integer('show')->default(0);
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
        Schema::dropIfExists('programes');
    }
}
