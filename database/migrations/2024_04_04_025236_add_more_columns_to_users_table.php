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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('age')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->text('bio')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('profile_pic')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profile_pic');
            $table->dropColumn('address');
            $table->dropColumn('phone_number');
            $table->dropColumn('bio');
            $table->dropColumn('gender');
            $table->dropColumn('age');
        });
    }
};
