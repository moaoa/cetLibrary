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
        Schema::create('teacher_files', function (Blueprint $table) {
            $table->id();
            $table->string('path', 255);
            $table->boolean('representQuestions');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_files');
    }
};
