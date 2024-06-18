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
        Schema::create('office_settings', function (Blueprint $table) {
            $table->id();
            $table->string('office_name');
            $table->string('office_name_en')->nullabale();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('flag')->nullable();
            $table->string('background_image')->nullable();
            $table->longText('Map_iframe')->nullable();
            $table->longText('Facebook_iframe')->nullable();
            $table->longText('Twitter_iframe')->nullable();
            $table->foreignId('information_officer_id')->nullable()->constrained('employees')->cascadeOnDelete();
            $table->foreignId('office_head_id')->nullable()->constrained('employees')->cascadeOnDelete();
            $table->foreignId('spoke_person_id')->nullable()->constrained('employees')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_settings');
    }
};
