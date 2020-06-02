<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('icon');
            $table->integer('status')->default(0);
            $table->integer('show')->default(0);
            $table->string('image')->nullable();
            $table->string('describe')->nullable();
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
        Schema::dropIfExists('scholarships');
    }
}
