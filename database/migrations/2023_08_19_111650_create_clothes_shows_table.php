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
        Schema::create('clothes_shows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cloth_id')->constrained('clothes');
            $table->foreignId('show_id')->constrained('shows');    //constrainedに参照先のテーブル名記載
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothes_shows');
    }
};
