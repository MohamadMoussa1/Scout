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
        Schema::create('activity_reports', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->foreignId('activity_type_id')->constrained('activity_type')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->string('location_address');
            $table->foreignId('region_id')->constrained('region')->onDelete('cascade');
            $table->string('town');
            $table->date('activity_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->foreignId('scout_id')->constrained('scouts')->onDelete('cascade');
            $table->timestamp('submitted_at')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_reports');
    }
};
