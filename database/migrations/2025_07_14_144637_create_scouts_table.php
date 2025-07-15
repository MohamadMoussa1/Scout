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
        Schema::create('scouts', function (Blueprint $table) {
            $table->id();
            $table->text('scout_photo');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('gender');
            $table->text('contact_tel_Home');
            $table->text('contact_tel_Cell');
            $table->text('contact_tel_father');
            $table->text('contact_tel_other');
            $table->foreignId('current_unit_id')->constrained('units')->onDelete('cascade');
            $table->string('address');
            $table->foreignId('region_id')->constrained('region')->onDelete('cascade');
            $table->string('town');
            $table->date('joining_date');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scouts');
    }
};
