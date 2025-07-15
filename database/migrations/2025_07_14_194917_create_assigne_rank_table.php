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
        Schema::create('assigne_rank', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scout_id')->constrained('scouts')->onDelete('cascade');
            $table->foreignId('rank_id')->constrained('rank')->onDelete('cascade');
            $table->date('assigned_date');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigne_rank');
    }
};
