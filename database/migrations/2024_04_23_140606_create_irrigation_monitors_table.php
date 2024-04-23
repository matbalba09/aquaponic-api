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
        Schema::create('irrigation_monitors', function (Blueprint $table) {
            $table->id();
            $table->decimal('temp', 5, 2)->nullable();
            $table->decimal('ec', 5, 2)->nullable();
            $table->decimal('ppm', 5, 2)->nullable(); 
            $table->decimal('ph', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('irrigation_monitors');
    }
};
