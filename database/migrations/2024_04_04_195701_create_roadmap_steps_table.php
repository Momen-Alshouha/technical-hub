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
        Schema::create('roadmap_steps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roadmap_id');
            $table->text('title');
            $table->text('description');
            $table->tinyInteger('sequence');
            $table->foreign('roadmap_id')->references('id')->on('roadmaps')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('roadmap_steps');
    }
};
