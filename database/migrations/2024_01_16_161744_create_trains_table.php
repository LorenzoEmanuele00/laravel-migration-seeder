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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('arrive_station');
            $table->string('departure_station');
            $table->string('train_code');
            $table->tinyInteger('cart_number')->unsigned();
            $table->boolean('cancelled');
            $table->boolean('on_time');
            $table->dateTime('arrive_time');
            $table->dateTime('departure_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
