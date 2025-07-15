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
        Schema::create('scout_badges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('badge_id')->constrained('badges')->onDelete('cascade');
            $table->foreignId('scout_id')->constrained('scouts')->onDelete('cascade');
            $table->date('awarded_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scout_badges');
    }
};
