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
        Schema::create('scout_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scout_id')->constrained('scouts')->onDelete('cascade');
            $table->foreignId('Tlevel_id')->constrained('tlevel_type')->onDelete('cascade');
            $table->date('achieved_date');
            $table->foreignId('committee_id')->constrained('committee_type')->onDelete('cascade');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scout_progress');
    }
};
