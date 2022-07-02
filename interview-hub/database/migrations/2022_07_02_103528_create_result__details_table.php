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
        Schema::create('result__details', function (Blueprint $table) {
            $table->id();
            $table->integer('result_id');
            $table->integer('qustion_id');
            $table->integer('option_id');
            $table->boolean('is_right');
            $table->timestamps();
            $table->foreign('result_id')->references('id')->on('results')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('qustion_id')->references('id')->on('qustions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('option_id')->references('id')->on('options')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result__details');
    }
};
