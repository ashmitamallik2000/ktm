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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en');
            $table->foreignId('document_id')->constrained()->cascadeOnDelete;
            $table->string('date');
            $table->string('photo');
            $table->string('position');
            $table->string('publisher');
            $table->string('publisher_en');
            $table->string('description');
            $table->string('description_en');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
