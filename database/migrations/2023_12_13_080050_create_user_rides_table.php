<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_rides', function (Blueprint $table) {
            $table->id('ur_id');
            $table->unsignedBigInteger('ride_id');
            $table->unsignedBigInteger('passanger_id');
            $table->text('review');
            $table->integer('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_rides');
    }
};
