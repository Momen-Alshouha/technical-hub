<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('interview__qus__cats', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->text('image');
            $table->timestamps();
        });

        // Insert records
        DB::table('interview__qus__cats')->insert([
            [
                'title' => 'HTML',
                'description' => 'HTML Interview Questions!',
                'image' => 'html.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Back-End',
                'description' => 'Back-End Interview Questions!',
                'image' => 'backend.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Front-End',
                'description' => 'Front-End Interview Questions!',
                'image' => 'frontend.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Database',
                'description' => 'Database Interview Questions',
                'image' => 'database.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interview__qus__cats');
    }
};
