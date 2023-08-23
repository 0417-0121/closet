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
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('temp_id')->constrained('temps');
            $table->foreignId('color_id')->constrained('colors');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('comment', 200);
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('favorite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes');
    }
};
